import { useState } from 'react';
import { z } from 'zod';

export const PhoneNumberInput = ({
    onValueChange,
}: {
    onValueChange: (value: string) => void;
}) => {
    const [inputState, setInputState] = useState<{
        isValid: boolean;
        isTouched: boolean;
        isDirty: boolean;
    }>({
        isValid: false,
        isTouched: false,
        isDirty: false,
    });
    const [value, setValue] = useState<string>('');
    const validationSchema = z.object({
        value: z.string().min(6).max(14),
    });

    const onValueChangeHandler = (value: string) => {
        setValue(value);
        onValueChange(value);
        setInputState((prev) => ({
            ...prev,
            isDirty: value.length > 0,
            isTouched: true,
        }));
        const results = validationSchema.safeParse({ value });
        if (results.success) {
            setInputState((prev) => ({ ...prev, isValid: true }));
        } else {
            setInputState((prev) => ({ ...prev, isValid: false }));
        }
    };
    return (
        <div>
            <label
                htmlFor="mobile-number"
                className="block text-sm font-medium text-gray-700"
            >
                Mobile Number
            </label>
            <div className="relative mt-1 rounded-md shadow-sm">
                <div className="absolute inset-y-0 left-0 flex items-center">
                    <label htmlFor="country" className="sr-only">
                        Country
                    </label>
                    <select
                        id="country"
                        name="country"
                        autoComplete="country"
                        className="h-full rounded-md border-transparent bg-transparent py-0 pl-3 pr-7 text-gray-500 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    >
                        <option>+64</option>
                    </select>
                </div>
                <input
                    value={value}
                    onChange={({ target: { value } }) =>
                        onValueChangeHandler(value)
                    }
                    type="number"
                    name="mobile-number"
                    id="mobile-number"
                    className="block w-full rounded-md border-gray-300 pl-16 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="(555) 987-6543"
                />
            </div>
            {inputState.isTouched &&
                inputState.isDirty &&
                !inputState.isValid && (
                    <span className="flex items-center font-medium tracking-wide text-red-500 text-xs ml-1 mt-2">
                        Mobile number is required and must be valid.
                    </span>
                )}
        </div>
    );
};
