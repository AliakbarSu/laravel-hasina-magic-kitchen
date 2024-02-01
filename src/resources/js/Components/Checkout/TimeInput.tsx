import { AdapterDayjs } from '@mui/x-date-pickers/AdapterDayjs';
import { LocalizationProvider } from '@mui/x-date-pickers/LocalizationProvider';
import { StaticTimePicker } from '@mui/x-date-pickers/StaticTimePicker';
import dayjs from 'dayjs';
import { useState } from 'react';
import { z } from 'zod';

const fiveAM = dayjs().set('hour', 5).startOf('hour');
const ninePM = dayjs().set('hour', 22).startOf('hour');

export const TimeInput = ({
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
    const [, setValue] = useState<string>('');
    const validationSchema = z.object({
        value: z.string().min(4).max(5),
    });

    const onValueChangeHandler = (time: dayjs.Dayjs | null) => {
        const value = time?.format('HH:mm') ?? '';
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
        <LocalizationProvider dateAdapter={AdapterDayjs}>
            <StaticTimePicker
                minTime={fiveAM}
                maxTime={ninePM}
                onChange={onValueChangeHandler}
            />
            {inputState.isTouched &&
                inputState.isDirty &&
                !inputState.isValid && (
                    <span className="flex items-center font-medium tracking-wide text-red-500 text-xs ml-1 mt-2">
                        Time is required.
                    </span>
                )}
        </LocalizationProvider>
    );
};
