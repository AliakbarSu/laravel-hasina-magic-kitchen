import Nav from '@/Layouts/Nav';
import { Head } from '@inertiajs/react';
import { Footer } from '@/Components/UI/Footer';
import InfoSection from '@/Components/Checkout/InfoSection';
import dayjs from 'dayjs';

const Checkout = (props: { orders: string[] }) => {
    const bookedDates = Object.values(props.orders).map((date: string) =>
        dayjs(date)
    );
    return (
        <>
            <Head title="Checkout" />
            <Nav />
            <InfoSection bookedDates={bookedDates} />
            <Footer />
        </>
    );
};

export default Checkout;
