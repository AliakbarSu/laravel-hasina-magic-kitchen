import { LocalizationProvider } from '@mui/x-date-pickers/LocalizationProvider';
import { AdapterDayjs } from '@mui/x-date-pickers/AdapterDayjs';
import { DateCalendar } from '@mui/x-date-pickers/DateCalendar';
import dayjs from 'dayjs';

const Calendar = ({
    bookedDates,
    onDatePicked,
}: {
    bookedDates: dayjs.Dayjs[];
    onDatePicked: (value: string) => void;
}) => {
    const shouldDisableDate = (date: dayjs.Dayjs) => {
        if (bookedDates.length > 0) {
            return bookedDates.some((bookedDate) =>
                dayjs(bookedDate).isSame(date, 'day')
            );
        }
        return false;
    };
    return (
        <LocalizationProvider dateAdapter={AdapterDayjs}>
            <DateCalendar
                views={['year', 'month', 'day']}
                maxDate={dayjs().add(3, 'months')}
                disablePast={true}
                shouldDisableDate={shouldDisableDate}
                onChange={(value) =>
                    onDatePicked(
                        `${value?.get('year')}-${value?.get(
                            'month'
                        )}-${value?.get('date')}`
                    )
                }
            />
        </LocalizationProvider>
    );
};

export default Calendar;
