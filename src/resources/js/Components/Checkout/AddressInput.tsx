import axios from 'axios';
import { useEffect, useState } from 'react';

export function AddressInput(props: {
    isAddressValidated: boolean;
    setIsAddressValidated: (value: boolean) => void;
    setState: (value: string) => void;
    setError: (err: string | null) => void;
}) {
    const [address1, setAddress1] = useState('');
    const [suburb, setSuburb] = useState('');
    const [city, setCity] = useState('Auckland');
    const [postCode, setPostCode] = useState('');
    // eslint-disable-next-line @typescript-eslint/no-unused-vars
    const [__, setHasError] = useState(false);

    let timeout: NodeJS.Timeout;
    const debounce = function (func: () => Promise<void>, delay: number) {
        clearTimeout(timeout);
        timeout = setTimeout(func, delay);
    };

    useEffect(() => {
        const address = {
            address1,
            suburb,
            city,
            postCode,
        };
        debounce(() => {
            props.setIsAddressValidated(false);
            return axios
                .post('/api/validate/address', {
                    address: `${address1}, ${suburb}`,
                })
                .then((result) => {
                    const isValid = result.data.validation_result;
                    setHasError(!isValid);
                    if (!isValid) {
                        props.setError('Invalid address');
                    } else {
                        props.setError(null);
                    }
                    props.setIsAddressValidated(true);
                });
        }, 200);

        props.setState(`${address.address1}, ${address.suburb}`);
    }, [address1, suburb, city, postCode]);

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
                            value={address1}
                            onChange={({ target }) => setAddress1(target.value)}
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
                            value={suburb}
                            onChange={({ target }) => setSuburb(target.value)}
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
                                onChange={({ target }) => setCity(target.value)}
                                value={city}
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
                                value={postCode}
                                onChange={({ target }) =>
                                    setPostCode(target.value)
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
        </div>
    );
}
