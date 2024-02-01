import { useState } from 'react';
import { z } from 'zod';

export const NameInput = ({
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
        value: z.string().min(2).max(20),
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
                htmlFor="first-name"
                className="block text-sm font-medium leading-6 text-gray-900"
            >
                Name
            </label>
            <div className="mt-2">
                <input
                    value={value}
                    onChange={({ target: { value } }) =>
                        onValueChangeHandler(value)
                    }
                    type="text"
                    name="first-name"
                    id="first-name"
                    autoComplete="given-name"
                    className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                />
            </div>
            {inputState.isTouched &&
                inputState.isDirty &&
                !inputState.isValid && (
                    <span className="flex items-center font-medium tracking-wide text-red-500 text-xs ml-1 mt-2">
                        Name is required and should be 2 to 20 characters long.
                    </span>
                )}
        </div>
    );
};
