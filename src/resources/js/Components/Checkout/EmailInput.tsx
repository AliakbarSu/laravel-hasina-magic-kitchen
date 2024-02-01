import { EnvelopeIcon } from '@heroicons/react/20/solid';
import { useState } from 'react';
import { z } from 'zod';

const EmailInput = ({
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
        value: z.string().email(),
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
                htmlFor="email"
                className="block text-sm font-medium text-gray-700"
            >
                Email
            </label>
            <div className="relative mt-1 rounded-md shadow-sm">
                <div className="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <EnvelopeIcon
                        className="h-5 w-5 text-gray-400"
                        aria-hidden="true"
                    />
                </div>
                <input
                    value={value}
                    onChange={({ target: { value } }) =>
                        onValueChangeHandler(value)
                    }
                    type="email"
                    name="email"
                    id="email"
                    className="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="you@example.com"
                />
            </div>
            {inputState.isTouched &&
                inputState.isDirty &&
                !inputState.isValid && (
                    <span className="flex items-center font-medium tracking-wide text-red-500 text-xs ml-1 mt-2">
                        Email is required and must be valid.
                    </span>
                )}
        </div>
    );
};

export default EmailInput;
