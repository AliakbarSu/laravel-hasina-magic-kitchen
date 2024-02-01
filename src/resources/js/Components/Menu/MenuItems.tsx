import { Dish, Menu } from '@/types/application';
import { useDispatch, useSelector } from 'react-redux';
import { setSelectedMenu } from '@/store/slice/menu';
import { RootState } from '@/store';
import { useState } from 'react';
import { ReplaceOptionsModal } from '@/Components/Menu/ReplaceOptions';

export function MenuItems() {
    const dispatch = useDispatch();
    const originalMenu = useSelector(
        (state: RootState) => state.menu.originalMenu
    );
    const menu = useSelector(
        (state: { menu: { selectedMenu: Menu } }) => state.menu.selectedMenu
    );
    const [selectedDish, setSelectedDish] = useState<Dish | null>(null);

    const onItemRemoveHanlder = (id: string) => {
        const updatedMenu = {
            ...menu,
            dishes: menu.dishes.filter((dish) => dish.id !== id),
        };
        dispatch(setSelectedMenu(updatedMenu));
    };

    const onUpdateItemsHandler = (id: string, prevId: string) => {
        if (id.length === 0) return;
        const toReplaceWith = menu.options.find(
            (dish) => dish.id === id
        ) as Dish;
        const updatedDishes = menu.dishes.map((dish) => {
            if (dish.id === prevId) {
                return toReplaceWith;
            }
            return dish;
        });
        const updatedMenu = {
            ...menu,
            dishes: updatedDishes,
        };

        dispatch(setSelectedMenu(updatedMenu));
    };

    const onResetItemsHandler = () => {
        const originalItem = originalMenu.find((item) => item.id === menu.id);
        if (!originalItem) return;
        const updatedMenu = {
            ...menu,
            dishes: originalItem.dishes,
        };
        dispatch(setSelectedMenu(updatedMenu));
    };

    const availableOptions = menu.options.filter((option) => {
        return menu.dishes.find((dish) => dish.id === option.id) === undefined;
    });

    return (
        <div className="">
            <div className="flex justify-between">
                <h2 className="text-sm font-medium text-gray-500">
                    Menu Items
                </h2>
                <span
                    className="text-sm text-red-500 cursor-pointer hover:text-red-400"
                    onClick={onResetItemsHandler}
                >
                    <b>Reset</b>
                </span>
            </div>

            <ul
                role="list"
                className="relative mt-1 flex flex-row flex-wrap gap-1"
            >
                {menu.dishes.map((item) => (
                    <li
                        key={item.id}
                        className="flex rounded-md shadow-sm w-full"
                    >
                        <div className="overflow-visible flex flex-1 items-center justify-between rounded-md border border-gray-200 bg-white">
                            <div className="flex-1 truncate px-4 py-2 text-sm">
                                <p className="font-medium text-gray-900 hover:text-gray-600">
                                    {item.name}
                                </p>
                            </div>
                            <div className="flex-shrink-0 p-2">
                                <button
                                    onClick={() => {
                                        setSelectedDish(item);
                                    }}
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
                                <button
                                    onClick={() => onItemRemoveHanlder(item.id)}
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
                ))}
                <ReplaceOptionsModal
                    dishes={availableOptions}
                    setOpen={() => setSelectedDish(null)}
                    dish={selectedDish}
                    onApply={onUpdateItemsHandler}
                    open={selectedDish !== null}
                />
            </ul>
        </div>
    );
}
