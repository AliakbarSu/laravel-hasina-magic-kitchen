import { Category } from '@/types/application';

const staticImage =
    'https://images.unsplash.com/photo-1540420773420-3366772f4999?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=984&q=80';

const Filter = ({
    categories,
    onClick,
}: {
    categories: Category[];
    onClick: (category: Category) => void;
}) => {
    return (
        <ul
            role="list"
            className="mx-auto px-4 pt-24 pb-16 max-w-6xl gap-5 sm:gap-10 flex flex-wrap justify-center items-center overflow-y-scroll"
        >
            {categories.map((category) => (
                <li
                    onClick={() => onClick(category)}
                    key={category.id}
                    className="flex flex-col justify-center items-center"
                >
                    <img
                        className="mx-auto h-24 w-24 rounded-full border-8 border-blue-100"
                        src={category.image ? category.image : staticImage}
                        alt={category.name}
                    />
                    <h3 className="mt-6 text-md font-extrabold leading-7 tracking-tight text-gray-900">
                        {category.name}
                    </h3>
                </li>
            ))}
        </ul>
    );
};

export default Filter;
