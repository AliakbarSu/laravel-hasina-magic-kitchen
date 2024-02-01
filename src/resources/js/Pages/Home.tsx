import MenuComponent from '@/Components/Menu';
import Header from '@/Layouts/Header';
import Nav from '@/Layouts/Nav';
import Filter from '@/Components/Filter';
import { Category, Dish, Menu } from '@/types/application';
import { Footer } from '@/Components/UI/Footer';
import { useEffect, useState } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { setDishes, setMenus } from '@/store/slice/menu';
import { RootState } from '@/store';
import { Head } from '@inertiajs/react';

const Home = ({
    menu,
    dishes,
    categories,
}: {
    menu: Menu[];
    dishes: Dish[];
    categories: Category[];
}) => {
    const dispatch = useDispatch();
    const menus = useSelector((state: RootState) => state.menu.menus);
    const storeDishes = useSelector((state: RootState) => state.menu.dishes);
    const [selectedCategory, setSelectedCategory] = useState<Category | null>();
    useEffect(() => {
        if (menus.length > 0) return;
        dispatch(setMenus(menu));
        if (storeDishes.length > 0) return;
        dispatch(setDishes(dishes));
    }, []);

    useEffect(() => {
        if (selectedCategory) {
            const filteredMenus = menu.filter(
                (menu) => menu.category.id === selectedCategory.id
            );
            dispatch(setMenus(filteredMenus));
        } else {
            dispatch(setMenus(menu));
        }
    }, [selectedCategory]);

    const onFilterClickHanlder = (category: Category) => {
        if (selectedCategory?.id === category.id) {
            setSelectedCategory(null);
            return;
        }
        setSelectedCategory(category);
    };

    return (
        <>
            <Head title="Menu" />
            <Nav />
            <Header />
            <Filter onClick={onFilterClickHanlder} categories={categories} />
            {/* <Deal /> */}
            <MenuComponent menu={menus} />
            <Footer />
        </>
    );
};

export default Home;
