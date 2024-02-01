import { useState } from 'react';
import { z } from 'zod';

export const NoteInput = ({
    onValueChange,
}: {
    onValueChange: (note: string) => void;
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
        note: z.string().max(600).optional(),
    });

    const onValueChangeHandler = (value: string) => {
        setValue(value);
        onValueChange(value);
        setInputState((prev) => ({
            ...prev,
            isDirty: value.length > 0,
            isTouched: true,
        }));
        const results = validationSchema.safeParse({ note: value });
        if (results.success) {
            setInputState((prev) => ({ ...prev, isValid: true }));
        } else {
            setInputState((prev) => ({ ...prev, isValid: false }));
        }
    };

    return (
        <>
            <div>
                <label
                    htmlFor="about"
                    className="block text-sm font-medium leading-6 text-gray-700"
                >
                    Note
                </label>
                <div className="mt-2">
                    <textarea
                        value={value}
                        onChange={({ target: { value } }) =>
                            onValueChangeHandler(value)
                        }
                        id="about"
                        name="about"
                        rows={3}
                        className="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    />
                </div>
                {inputState.isTouched &&
                inputState.isDirty &&
                !inputState.isValid ? (
                    <p className="mt-3 text-sm leading-6 text-red-500">
                        Note is too long. Please enter between 0 and 255
                        characters.
                    </p>
                ) : (
                    <p className="mt-3 text-sm leading-6 text-gray-600">
                        Anything we should know? tell us!
                    </p>
                )}
            </div>
        </>
    );
};
