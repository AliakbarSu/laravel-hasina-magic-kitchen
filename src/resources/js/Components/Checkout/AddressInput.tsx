import axios from 'axios';
import { useEffect, useState } from 'react';

const AddressInput = ({
    onAddressChange,
}: {
    onAddressChange: (address: string) => void;
}) => {
    const [address, setAddress] = useState<{
        address1: string;
        suburb: string;
        city: string;
        postCode: string;
    }>({
        address1: '',
        suburb: '',
        city: 'Auckland',
        postCode: '',
    });
    // eslint-disable-next-line @typescript-eslint/no-unused-vars
    const [__, setHasError] = useState(false);
    const [isValidAddress, setIsValidAddress] = useState(false);

    let timeout: NodeJS.Timeout;
    const debounce = function (func: () => Promise<void>, delay: number) {
        clearTimeout(timeout);
        timeout = setTimeout(func, delay);
    };

    useEffect(() => {
        debounce(() => {
            return axios
                .post('/api/validate/address', {
                    address: `${address.address1}, ${address.suburb}`,
                })
                .then((result) => {
                    const isValid = result.data.validation_result;
                    setIsValidAddress(isValid);
                });
        }, 200);
        onAddressChange(`${address.address1}, ${address.suburb}`);
    }, [address]);

    const onAddressChangeHandler = (
        component: keyof typeof address,
        value: string
    ) => {
        setAddress((prev) => ({
            ...prev,
            [component]: value,
        }));
    };

    return (
        <div>
            <fieldset>
                <legend className="block text-sm font-medium text-gray-700">
                    Delivery Address
                </legend>
                <div className="mt-1 -space-y-px rounded-md bg-white shadow-sm">
                    <div>
                        <label htmlFor="address" className="sr-only">
                            Address Line 1
                        </label>
                        <input
                            value={address.address1}
                            onChange={({ target: { value } }) =>
                                onAddressChangeHandler('address1', value)
                            }
                            type="text"
                            name="address"
                            id="address"
                            className="relative block w-full rounded-none rounded-t-md border-gray-300 bg-transparent focus:z-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="Address Line 1"
                        />
                    </div>
                    <div>
                        <label htmlFor="suburb" className="sr-only">
                            Suburb
                        </label>
                        <input
                            value={address.suburb}
                            onChange={({ target: { value } }) =>
                                onAddressChangeHandler('suburb', value)
                            }
                            type="text"
                            name="suburb"
                            id="suburb"
                            className="relative block w-full rounded-none border-gray-300 bg-transparent focus:z-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="Suburb"
                        />
                    </div>
                    <div className="flex -space-x-px">
                        <div className="w-1/2 min-w-0 flex-1">
                            <label htmlFor="city" className="sr-only">
                                City
                            </label>
                            <input
                                disabled
                                onChange={({ target: { value } }) =>
                                    onAddressChangeHandler('city', value)
                                }
                                value={address.city}
                                type="text"
                                name="city"
                                id="city"
                                className="relative block w-full rounded-none rounded-bl-md border-gray-300 bg-gray-100 text-gray-400 sm:text-sm"
                                placeholder="Auckland"
                            />
                        </div>
                        <div className="min-w-0 flex-1">
                            <label htmlFor="postcode" className="sr-only">
                                Postcode
                            </label>
                            <input
                                value={address.postCode}
                                onChange={({ target: { value } }) =>
                                    onAddressChangeHandler('postCode', value)
                                }
                                type="text"
                                name="postcode"
                                id="postcode"
                                className="relative block w-full rounded-none rounded-br-md border-gray-300 bg-transparent focus:z-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                placeholder="Postcode"
                            />
                        </div>
                    </div>
                </div>
            </fieldset>
            {isValidAddress ? (
                <span className="flex items-center font-medium tracking-wide text-green-500 text-xs ml-1">
                    waiting for validation...
                </span>
            ) : (
                <span className="flex items-center font-medium tracking-wide text-red-500 text-xs ml-1">
                    address is not valid
                </span>
            )}
        </div>
    );
};

export default AddressInput;
