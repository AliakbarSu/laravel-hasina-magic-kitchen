import { Dish } from '@/types/application';

export const DishComponent = ({
    item,
    onClick,
}: {
    item: Dish;
    onClick: (addon: Dish) => void;
}) => {
    return (
        <li key={item.id} className="flex rounded-md shadow-sm">
            <div className="overflow-visible flex flex-1 items-center justify-between rounded-md border border-gray-200 bg-white">
                <div className="flex-1 flex gap-1 truncate px-4 py-2 text-sm">
                    <p className="font-medium text-gray-900 hover:text-gray-600">
                        {item.name}
                    </p>
                </div>
                <div className="flex-shrink-0 p-2">
                    <button
                        onClick={() => onClick(item)}
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
                                d="m16 10 3-3m0 0-3-3m3 3H5v3m3 4-3 3m0 0 3 3m-3-3h14v-3"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </li>
    );
};
