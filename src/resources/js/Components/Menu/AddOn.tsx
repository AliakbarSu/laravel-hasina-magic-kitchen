import { Addon } from '@/types/application';
import { useEffect, useState } from 'react';

export const AddOn = ({
    item,
    onUpdateAddon,
}: {
    item: Addon;
    onUpdateAddon: (addon: Addon) => void;
}) => {
    const [quantity, setQuantity] = useState(item.quantity);

    const addHandler = () => {
        setQuantity((quantity) => quantity + 1);
    };

    const removeHandler = () => {
        setQuantity((quantity) => {
            if (quantity === 0) return 0;
            return quantity - 1;
        });
    };

    useEffect(() => {
        onUpdateAddon({ ...item, quantity });
    }, [quantity]);

    return (
        <li key={item.id} className="flex rounded-md shadow-sm">
            <div className="overflow-visible flex flex-1 items-center justify-between rounded-md border border-gray-200 bg-white">
                <div className="flex-1 flex gap-1 truncate px-4 py-2 text-sm">
                    <p className="font-medium text-gray-900 hover:text-gray-600">
                        {item.name}
                    </p>

                    {item.quantity > 0 ? (
                        <>
                            <span> x </span>{' '}
                            <b className="text-green-800">{item.quantity}</b>
                        </>
                    ) : null}
                </div>
                <div className="flex-shrink-0 p-2">
                    <button
                        onClick={addHandler}
                        type="button"
                        className="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-1 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >
                        <svg
                            className="w-6 h-6 text-gray-800 dark:text-white"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="white"
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                strokeWidth="2"
                                d="M5 12h14m-7 7V5"
                            />
                        </svg>
                    </button>
                    <button
                        onClick={removeHandler}
                        type="button"
                        className="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-1 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                    >
                        <svg
                            className="w-6 h-6 text-gray-800 dark:text-white"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="white"
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                strokeWidth="2"
                                d="M5 12h14"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </li>
    );
};
