import { FormEvent, useEffect, useState } from 'react';
import {
    PaymentElement,
    useElements,
    useStripe,
} from '@stripe/react-stripe-js';
import { Addon, Order } from '@/types/application';
import axios from 'axios';
import { formatNZD } from '@/utils/currentcy';
import AddressInput from '@/Components/Checkout/AddressInput';
import { PhoneNumberInput } from '@/Components/Checkout/PhoneNumberInput';
import { z } from 'zod';
import OrderFailed from '@/Components/Checkout/OrderFailed';
import { useSelector } from 'react-redux/es/hooks/useSelector';
import {
    CartItem,
    removeAddon,
    removeItem,
    selectCartTotal,
} from '@/store/slice/cart';
import { RootState } from '@/store';
import EmailInput from '@/Components/Checkout/EmailInput';
import { TimeInput } from '@/Components/Checkout/TimeInput';
import { NameInput } from '@/Components/Checkout/NameInput';
import { NoteInput } from '@/Components/Checkout/NoteInput';
import { classNames } from '@/utils/classNames';
import { useDispatch } from 'react-redux';
import { InformationCircleIcon } from '@heroicons/react/20/solid';
import { optimizeImage } from '@/utils/cloudinary';
import Calendar from '@/Components/Calendar/Calendar';
import dayjs from 'dayjs';

const DEV_FEE = 25;
const GST = 0.15;

const InfoSection = ({ bookedDates }: { bookedDates: dayjs.Dayjs[] }) => {
    const [formData, setFormData] = useState<{
        name: string;
        address: string;
        date: string;
        time: string;
        phone: number;
        email: string;
        note: string;
    }>({
        name: '',
        address: '',
        date: '',
        time: '',
        phone: 0,
        email: '',
        note: '',
    });

    const [formState, setFormState] = useState<{
        isValid: boolean;
        isTouched: boolean;
        isDirty: boolean;
    }>({
        isValid: false,
        isTouched: false,
        isDirty: false,
    });

    const onFormDataChangeHandler = (
        component: keyof typeof formData,
        value: string
    ) => {
        setFormData((prev) => ({
            ...prev,
            [component]: value,
        }));
    };

    useEffect(() => {
        const results = formSchema.safeParse({ ...formData });
        const isValid = results.success;
        setFormState((prev) => ({
            ...prev,
            isValid: isValid,
            isDirty: true,
            isTouched: true,
        }));
    }, [formData]);
    const elements = useElements();
    const stripe = useStripe();
    const dispatch = useDispatch();
    // eslint-disable-next-line @typescript-eslint/no-unused-vars
    const [__, setErrorMessage] = useState('');
    const [orderFailedModal, setOrderFailedModal] = useState(false);
    const [loading, setLoading] = useState(false);
    const cartItems = useSelector((state: RootState) => state.cart.items);
    const cartTotal = useSelector(selectCartTotal);
    const cartAddons = useSelector((state: RootState) => state.cart.addons);

    const formSchema = z.object({
        name: z.string().min(2).max(20),
        address: z.string().min(5).max(80),
        date: z.string().min(8).max(10),
        time: z.string().min(4).max(5),
        phone: z.string().min(6).max(14),
        email: z.string().email(),
        note: z.string().max(600).optional(),
    });

    const handleError = (error: Error) => {
        setLoading(false);
        setErrorMessage(error.message);
    };

    const removeCartItem = (item: CartItem) => {
        dispatch(removeItem(item.id));
    };

    const removeAddonHandler = (addon: Addon) => {
        dispatch(removeAddon(addon.id));
    };

    const formHandler = async (e: FormEvent) => {
        e.preventDefault();
        if (!stripe) return;

        const submittedElements = await elements?.submit();

        const results = formSchema.safeParse({ ...formData });
        if (!results.success) {
            return setFormState((prev) => ({
                ...prev,
                isValid: false,
            }));
        }

        if (submittedElements?.error) {
            return handleError(submittedElements.error as unknown as Error);
        }
        const order: Order = {
            ...formData,
            items: cartItems.map(({ id, dishes, numOfPeople }: CartItem) => ({
                menu_id: id,
                dishes: dishes.map(({ id }) => id),
                quantity: numOfPeople,
            })),
            addons: cartAddons,
        };
        if (!elements) return;
        try {
            setLoading(true);
            const { data } = await axios.post(route('order.add'), order);
            const paymentMethod = await stripe?.createPaymentMethod({
                elements,
            });
            await stripe?.confirmCardPayment(data.client_secret, {
                payment_method: paymentMethod?.paymentMethod?.id,
            });
            // dispatch(clearCart());
            // router.visit(route('order.summary', { id: data.id }));
        } catch (err) {
            console.log(err);
            setOrderFailedModal(true);
        } finally {
            setLoading(false);
        }
    };

    function calculateGST(price: number) {
        const result = price * GST;
        return result;
    }

    const getTotal = (price: number) => {
        const tax = calculateGST(price);
        return price + tax + DEV_FEE;
    };

    const disableBtn =
        (loading || cartItems.length === 0 || !formState.isValid) &&
        formState.isTouched &&
        formState.isDirty;

    return (
        <div className="bg-white relative">
            <OrderFailed
                open={orderFailedModal}
                setOpen={setOrderFailedModal}
            />
            {/* Background color split screen for large screens */}

            <div
                className="absolute left-0 top-0 hidden h-full w-1/2 bg-white lg:block"
                aria-hidden="true"
            />
            <div
                className="absolute right-0 top-0 hidden h-full w-1/2 bg-gray-100 lg:block"
                aria-hidden="true"
            />

            <div className="relative mx-auto grid max-w-7xl grid-cols-1 gap-x-16 lg:grid-cols-2 lg:px-8 lg:pt-16">
                <h1 className="sr-only">Checkout</h1>

                <section
                    aria-labelledby="summary-heading"
                    className="row-start-2 bg-gray-100 py-12 text-gray-500 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0"
                >
                    <div className="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                        <h2 id="summary-heading" className="sr-only">
                            Order summary
                        </h2>
                        {cartItems.length === 0 && (
                            <div className="rounded-md bg-blue-50 p-4">
                                <div className="flex mb-2 rounded-md">
                                    <div className="flex-shrink-0">
                                        <InformationCircleIcon
                                            className="h-5 w-5 text-blue-400"
                                            aria-hidden="true"
                                        />
                                    </div>
                                    <div className="ml-3 flex-1 md:flex md:justify-between">
                                        <p className="text-sm text-blue-700">
                                            Your cart is empty!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        )}
                        <ul
                            role="list"
                            className="divide-y divide-white divide-opacity-10 text-sm font-medium"
                        >
                            {cartItems.map((item) => (
                                <li
                                    key={item.id}
                                    className="flex items-start space-x-4 py-6"
                                >
                                    <img
                                        src={optimizeImage(
                                            item.media.at(0)?.url,
                                            300,
                                            300
                                        )}
                                        alt={`Image of ${item.name} menu`}
                                        className="border h-20 w-20 flex-none rounded-md object-cover object-center"
                                    />
                                    <div className="flex-auto space-y-1">
                                        <h3 className="text-black">
                                            {item.name}
                                        </h3>
                                        <p>{item.description}</p>
                                        <p className="text-gray-900 font-extrabold">{`For ${item.numOfPeople} people`}</p>
                                    </div>
                                    <div>
                                        <p className="flex-none text-base font-medium text-black mb-2">
                                            {formatNZD(item.price)}
                                        </p>
                                        <p
                                            onClick={() => removeCartItem(item)}
                                            className="text-sm text-red-600 cursor-pointer hover:text-red-300"
                                        >
                                            <b>Remove</b>
                                        </p>
                                    </div>
                                </li>
                            ))}
                        </ul>
                        {cartAddons.length > 0 && (
                            <h3 className="text-md">Addons</h3>
                        )}
                        <ul
                            role="list"
                            className="divide-y divide-white divide-opacity-10 text-sm font-medium"
                        >
                            {cartAddons.map((item) => (
                                <li
                                    key={item.id}
                                    className="flex items-start space-x-4 py-6"
                                >
                                    <img
                                        src={optimizeImage(
                                            item.media.at(0)?.url,
                                            300,
                                            300
                                        )}
                                        alt={`Image of ${item.name} menu`}
                                        className="border h-20 w-20 flex-none rounded-md object-cover object-center"
                                    />
                                    <div className="flex-auto space-y-1">
                                        <h3 className="text-black">
                                            {item.name}
                                        </h3>
                                        <p>{item.description}</p>
                                        <p className="text-gray-900 font-extrabold">
                                            <b>Qty: </b>${item.quantity}
                                        </p>
                                    </div>
                                    <div>
                                        <p className="flex-none text-base font-medium text-black mb-2">
                                            {formatNZD(item.price)}
                                        </p>
                                        <p
                                            onClick={() =>
                                                removeAddonHandler(item)
                                            }
                                            className="text-sm text-red-600 cursor-pointer hover:text-red-300"
                                        >
                                            <b>Remove</b>
                                        </p>
                                    </div>
                                </li>
                            ))}
                        </ul>

                        <dl className="space-y-6 border-t border-black border-opacity-10 pt-6 text-sm font-medium">
                            <div className="flex items-center justify-between">
                                <dt>Subtotal</dt>
                                <dd>{formatNZD(cartTotal)}</dd>
                            </div>

                            <div className="flex items-center justify-between">
                                <dt>Shipping</dt>
                                <dd>{formatNZD(DEV_FEE)}</dd>
                            </div>

                            <div className="flex items-center justify-between">
                                <dt>GST</dt>
                                <dd>{formatNZD(calculateGST(cartTotal))}</dd>
                            </div>

                            <div className="flex items-center justify-between border-t border-black border-opacity-10 pt-6 text-black">
                                <dt className="text-base">Total</dt>
                                <dd className="text-base">
                                    {formatNZD(getTotal(cartTotal))} NZD
                                </dd>
                            </div>
                        </dl>
                    </div>
                    <div className="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0 mt-6">
                        <PaymentElement />
                    </div>
                    <div className="mt-10 flex justify-end border-t border-gray-200 pt-6">
                        <button
                            form="checkout-form"
                            disabled={disableBtn}
                            type="submit"
                            className={classNames(
                                'rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50',
                                !disableBtn && 'hover:bg-indigo-700',
                                disableBtn && 'disabled',
                                disableBtn && 'opacity-50',
                                disableBtn && 'cursor-not-allowed'
                            )}
                        >
                            {loading ? 'Submitting..' : 'Pay now'}
                        </button>
                    </div>
                </section>

                <section
                    aria-labelledby="payment-and-shipping-heading"
                    className="py-16 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:pb-24 lg:pt-0"
                >
                    <h2 id="payment-and-shipping-heading" className="sr-only">
                        Delivery details
                    </h2>

                    <form onSubmit={formHandler} id="checkout-form">
                        <div className="@container mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0 flex flex-col gap-3.5 @container">
                            {/* Content goes here */}
                            {/* <InfoTab /> */}
                            <div>
                                <h3 className="text-lg font-medium text-gray-900">
                                    Order date and time
                                </h3>

                                <div className="mt-6 flex items-center flex-wrap justify-center @md:flex-nowrap md:justify-between gap-3.5">
                                    <Calendar
                                        onDatePicked={(value) =>
                                            onFormDataChangeHandler(
                                                'date',
                                                value
                                            )
                                        }
                                        bookedDates={bookedDates}
                                    />
                                    <TimeInput
                                        onValueChange={(value) =>
                                            onFormDataChangeHandler(
                                                'time',
                                                value
                                            )
                                        }
                                    />
                                </div>
                            </div>

                            <div className="mt-10">
                                <h3 className="text-lg font-medium text-gray-900">
                                    Personal information
                                </h3>

                                <div className="mt-6 flex flex-col gap-3.5">
                                    <NameInput
                                        onValueChange={(value) =>
                                            onFormDataChangeHandler(
                                                'name',
                                                value
                                            )
                                        }
                                    />
                                    <PhoneNumberInput
                                        onValueChange={(value) =>
                                            onFormDataChangeHandler(
                                                'phone',
                                                value
                                            )
                                        }
                                    />
                                    <EmailInput
                                        onValueChange={(value) =>
                                            onFormDataChangeHandler(
                                                'email',
                                                value
                                            )
                                        }
                                    />
                                    <AddressInput
                                        onAddressChange={(value) =>
                                            onFormDataChangeHandler(
                                                'address',
                                                value
                                            )
                                        }
                                    />
                                    <NoteInput
                                        onValueChange={(value) =>
                                            onFormDataChangeHandler(
                                                'note',
                                                value
                                            )
                                        }
                                    />
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    );
};

export default InfoSection;
