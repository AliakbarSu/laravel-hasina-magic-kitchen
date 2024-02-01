import { Fragment } from 'react';
import { Dialog, Transition } from '@headlessui/react';
import { Dish } from '@/types/application';
import { DishComponent } from '@/Components/Menu/Dish';

type OptionsModalProps = {
    dishes: Dish[];
    open: boolean;
    dish: Dish | null;
    setOpen: (state: boolean) => void;
    onApply: (id: string, dish_id: string) => void;
};

export const ReplaceOptionsModal = ({
    open,
    setOpen,
    dishes = [],
    dish,
    onApply,
}: OptionsModalProps) => {
    const onClickHandler = (item: Dish) => {
        onApply(item.id, dish ? dish.id : '');
        setOpen(false);
    };
    return (
        <Transition.Root show={open} as={Fragment}>
            <Dialog as="div" className="relative z-10" onClose={setOpen}>
                <Transition.Child
                    as={Fragment}
                    enter="ease-out duration-300"
                    enterFrom="opacity-0"
                    enterTo="opacity-100"
                    leave="ease-in duration-200"
                    leaveFrom="opacity-100"
                    leaveTo="opacity-0"
                >
                    <div className="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" />
                </Transition.Child>

                <div className="fixed inset-0 z-10 overflow-y-auto">
                    <div className="flex min-h-full justify-center p-4 text-center items-center sm:p-0">
                        <Transition.Child
                            as={Fragment}
                            enter="ease-out duration-300"
                            enterFrom="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            enterTo="opacity-100 translate-y-0 sm:scale-100"
                            leave="ease-in duration-200"
                            leaveFrom="opacity-100 translate-y-0 sm:scale-100"
                            leaveTo="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        >
                            <Dialog.Panel className="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 w-full sm:max-w-2xl sm:p-6">
                                <div className="my-5">
                                    <div className="flex items-center">
                                        <h2 className="text-sm font-medium text-gray-500 mr-2">
                                            Replace with
                                        </h2>
                                    </div>
                                    <div className="relative mt-4 flex flex-wrap flex-col gap-1 p-1">
                                        {dishes.map((item) => (
                                            <DishComponent
                                                key={item.id}
                                                item={item}
                                                onClick={() =>
                                                    onClickHandler(item)
                                                }
                                            />
                                        ))}
                                    </div>
                                </div>
                            </Dialog.Panel>
                        </Transition.Child>
                    </div>
                </div>
            </Dialog>
        </Transition.Root>
    );
};
