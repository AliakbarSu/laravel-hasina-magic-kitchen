import { Addon } from '@/types/application';
import { useDispatch, useSelector } from 'react-redux';
import { addOrUpdate, removeAddon } from '@/store/slice/cart';
import { useEffect, useState } from 'react';
import { RootState } from '@/store';
import { AddOn } from './AddOn';

export const AddExtraDish = () => {
    const dishes = useSelector((state: RootState) => state.menu.dishes);
    const addons = useSelector((state: RootState) => state.cart.addons);
    const [selectedAddons, setSelectedAddons] = useState<Addon[]>([]);
    const dispatch = useDispatch();

    const availableAddons = dishes.map((dish) => {
        const quantity = addons.find((addon) => addon.id === dish.id)?.quantity;
        return {
            ...dish,
            quantity: quantity || 0,
        };
    });

    const onUpdateAddonHandler = (addon: Addon) => {
        const exsisitingAddon = selectedAddons.find(
            (item) => item.id === addon.id
        );
        if (exsisitingAddon) {
            setSelectedAddons((addons) =>
                addons.map((item) => (item.id === addon.id ? addon : item))
            );
        } else {
            setSelectedAddons([...selectedAddons, addon]);
        }
    };

    useEffect(() => {
        selectedAddons.forEach((addon) => {
            return addon.quantity === 0
                ? dispatch(removeAddon(addon.id))
                : dispatch(addOrUpdate(addon));
        });
    }, [selectedAddons]);

    return (
        <div className="my-5">
            <div className="flex items-center">
                <h2 className="text-sm font-medium text-gray-500 mr-2">
                    Add Extra Dish
                </h2>
            </div>
            <div className="relative mt-4 flex flex-wrap flex-col gap-1 p-1">
                {availableAddons.map((item) => (
                    <AddOn
                        onUpdateAddon={onUpdateAddonHandler}
                        key={item.id}
                        item={item}
                    />
                ))}
            </div>
        </div>
    );
};
