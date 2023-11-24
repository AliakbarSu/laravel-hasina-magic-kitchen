import { a as jsxs, j as jsx, F as Fragment$1 } from "../ssr.js";
import { useSelector, useDispatch } from "react-redux";
import { a as removeAddon, b as addOrUpdate, u as updateMenuItem$1, d as updateQuantity, e as addItem, r as removeItem } from "./cart-1daccc86.js";
import { useState, Fragment, useEffect, useRef, useId } from "react";
import { Transition, Dialog, Menu } from "@headlessui/react";
import { f as formatNZD } from "./currentcy-32efd882.js";
import { PlusIcon, MinusIcon, EllipsisVerticalIcon, UsersIcon } from "@heroicons/react/20/solid";
import { o as optimizeImage } from "./cloudinary-5ac51cec.js";
import { c as classNames, E as Example, F as Footer } from "./Footer-5adae4d0.js";
import InputLabel from "@mui/material/InputLabel/index.js";
import MenuItem$1 from "@mui/material/MenuItem/index.js";
import FormControl from "@mui/material/FormControl/index.js";
import Select from "@mui/material/Select/index.js";
import { createSlice } from "@reduxjs/toolkit";
import clsx from "clsx";
import { Head } from "@inertiajs/react";
import "react/jsx-runtime";
import "react-dom/server";
import "@inertiajs/react/server";
import "@heroicons/react/24/outline";
const CartAddon = ({
  item,
  onUpdateAddon
}) => {
  var _a;
  const [quantity, setQuantity] = useState(0);
  const cartAddons = useSelector((state) => state.cart.addons);
  const onUpdateAddonHandler = (addon, quantity2) => {
    setQuantity(quantity2);
    onUpdateAddon({ ...addon, quantity: quantity2 });
  };
  useEffect(() => {
    const addon = cartAddons.find((addon2) => addon2.id === item.id);
    if (addon) {
      setQuantity(addon.quantity);
    } else {
      setQuantity(0);
    }
  }, [cartAddons]);
  return /* @__PURE__ */ jsxs("div", { className: "group relative", children: [
    /* @__PURE__ */ jsx("div", { className: "aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80", children: /* @__PURE__ */ jsx(
      "img",
      {
        src: optimizeImage((_a = item.media.at(0)) == null ? void 0 : _a.url, 500, 500),
        alt: "",
        className: "h-full w-full object-cover object-center lg:h-full lg:w-full"
      }
    ) }),
    /* @__PURE__ */ jsxs("div", { className: "my-4 flex justify-between", children: [
      /* @__PURE__ */ jsx("div", { children: /* @__PURE__ */ jsxs("h3", { className: "text-sm text-gray-700", children: [
        /* @__PURE__ */ jsx("span", { "aria-hidden": "true", className: "absolute inset-0" }),
        item.name
      ] }) }),
      /* @__PURE__ */ jsx("p", { className: "text-sm font-medium text-gray-900", children: formatNZD(item.price) })
    ] }),
    /* @__PURE__ */ jsxs("div", { className: "flex justify-center", children: [
      /* @__PURE__ */ jsx(
        "button",
        {
          type: "button",
          onClick: () => quantity > 0 && onUpdateAddonHandler(item, quantity - 1),
          className: "relative -ml-px inline-flex rounded-l-md items-center space-x-2  border border-gray-300 bg-gray-50 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100",
          children: /* @__PURE__ */ jsx(
            MinusIcon,
            {
              className: "h-5 w-5 text-gray-400",
              "aria-hidden": "true"
            }
          )
        }
      ),
      /* @__PURE__ */ jsx("span", { className: "relative -ml-px inline-flex items-center space-x-2 border border-gray-300 bg-gray-50 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100", children: quantity }),
      /* @__PURE__ */ jsx(
        "button",
        {
          type: "button",
          onClick: () => quantity < 100 && onUpdateAddonHandler(item, quantity + 1),
          className: "relative -ml-px inline-flex items-center space-x-2 rounded-r-md border border-gray-300 bg-gray-50 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100",
          children: /* @__PURE__ */ jsx(
            PlusIcon,
            {
              className: "h-5 w-5 text-gray-400",
              "aria-hidden": "true"
            }
          )
        }
      )
    ] })
  ] }, item.id);
};
const Modal = ({ open, setOpen, addons }) => {
  const dispatch = useDispatch();
  const [selectedAddons, setSelectedAddons] = useState([]);
  const onUpdateAddon = () => {
    setOpen(false);
    selectedAddons.forEach((addon) => {
      return addon.quantity === 0 ? dispatch(removeAddon(addon.id)) : dispatch(addOrUpdate(addon));
    });
  };
  const onUpdateAddonHandler = (addon) => {
    const exsisitingAddon = selectedAddons.find(
      (item) => item.id === addon.id
    );
    if (exsisitingAddon) {
      setSelectedAddons(
        selectedAddons.map(
          (item) => item.id === addon.id ? addon : item
        )
      );
    } else {
      setSelectedAddons([...selectedAddons, addon]);
    }
  };
  const onCancelHandler = () => {
    setOpen(false);
    setSelectedAddons([]);
  };
  return /* @__PURE__ */ jsx(Transition.Root, { show: open, as: Fragment, children: /* @__PURE__ */ jsxs(Dialog, { as: "div", className: "relative z-10", onClose: setOpen, children: [
    /* @__PURE__ */ jsx(
      Transition.Child,
      {
        as: Fragment,
        enter: "ease-out duration-300",
        enterFrom: "opacity-0",
        enterTo: "opacity-100",
        leave: "ease-in duration-200",
        leaveFrom: "opacity-100",
        leaveTo: "opacity-0",
        children: /* @__PURE__ */ jsx("div", { className: "fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" })
      }
    ),
    /* @__PURE__ */ jsxs("div", { className: "bg-white fixed inset-0 z-10 overflow-y-auto", children: [
      /* @__PURE__ */ jsxs("div", { className: "mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8", children: [
        /* @__PURE__ */ jsx("div", { className: "flex justify-between", children: /* @__PURE__ */ jsx("h2", { className: "text-2xl font-bold tracking-tight text-gray-900", children: "Addons" }) }),
        /* @__PURE__ */ jsx("div", { className: "mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8", children: addons.map((item) => /* @__PURE__ */ jsx(
          CartAddon,
          {
            onUpdateAddon: onUpdateAddonHandler,
            item
          },
          item.id
        )) })
      ] }),
      /* @__PURE__ */ jsxs("div", { className: "sticky bottom-0 shadow-inner bg-white py-3 max-w-7xl lg:mx-auto w-full flex px-2 lg:px-5 justify-center lg:justify-end items-center gap-2 mb-10", children: [
        /* @__PURE__ */ jsx(
          "button",
          {
            type: "button",
            className: "inline-flex max-w-xs w-full justify-center rounded-md bg-white px-3 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:col-start-1 sm:mt-0",
            onClick: onCancelHandler,
            children: "Cancel"
          }
        ),
        /* @__PURE__ */ jsx(
          "button",
          {
            type: "button",
            className: "inline-flex max-w-xs w-full justify-center rounded-md bg-indigo-600 px-3 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:col-start-2",
            onClick: onUpdateAddon,
            children: "Apply"
          }
        )
      ] })
    ] })
  ] }) });
};
function AddExtraDish() {
  const [open, setOpen] = useState(false);
  const dishes = useSelector((state) => state.menu.dishes);
  const addedAddons = useSelector((state) => state.cart.addons);
  return /* @__PURE__ */ jsxs("div", { className: "my-20 ", children: [
    /* @__PURE__ */ jsx(Modal, { open, setOpen, addons: dishes }),
    /* @__PURE__ */ jsxs("div", { className: "flex items-center", children: [
      /* @__PURE__ */ jsx("h2", { className: "text-sm font-medium text-gray-500 mr-2", children: "Add Extra Dish" }),
      /* @__PURE__ */ jsx(
        "button",
        {
          onClick: () => setOpen(true),
          type: "button",
          className: "rounded-full bg-gray-400 p-2 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600",
          children: /* @__PURE__ */ jsx(PlusIcon, { className: "h-5 w-5", "aria-hidden": "true" })
        }
      )
    ] }),
    /* @__PURE__ */ jsx("div", { className: "relative mt-4 flex bg-gray-100 border rounded-md pb-10 pt-2", children: addedAddons.map((item) => /* @__PURE__ */ jsxs(
      "div",
      {
        className: "mx-2 bg-green-600 p-1 rounded-md text-white text-md",
        children: [
          /* @__PURE__ */ jsx("span", { children: item.name }),
          /* @__PURE__ */ jsx("span", { className: "text-sm px-1", children: "x" }),
          /* @__PURE__ */ jsx("span", { children: item.quantity })
        ]
      },
      item.id
    )) })
  ] });
}
function ReplaceOptionsModal({
  open,
  setOpen,
  dishes = [],
  onApply
}) {
  var _a;
  const cancelButtonRef = useRef(null);
  const [options2, setOptions] = useState("");
  useEffect(() => {
    setOptions(() => {
      var _a2;
      return ((_a2 = dishes.at(0)) == null ? void 0 : _a2.id) || "";
    });
  }, [dishes]);
  const onInputChangeHandler = (e) => {
    setOptions(() => e.target.value);
  };
  const onApplyHandler = () => {
    setOpen(false);
    onApply(options2);
  };
  return /* @__PURE__ */ jsx(Transition.Root, { show: open, as: Fragment, children: /* @__PURE__ */ jsxs(
    Dialog,
    {
      as: "div",
      className: "relative z-10",
      initialFocus: cancelButtonRef,
      onClose: setOpen,
      children: [
        /* @__PURE__ */ jsx(
          Transition.Child,
          {
            as: Fragment,
            enter: "ease-out duration-300",
            enterFrom: "opacity-0",
            enterTo: "opacity-100",
            leave: "ease-in duration-200",
            leaveFrom: "opacity-100",
            leaveTo: "opacity-0",
            children: /* @__PURE__ */ jsx("div", { className: "fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" })
          }
        ),
        /* @__PURE__ */ jsx("div", { className: "fixed inset-0 z-10 overflow-y-auto", children: /* @__PURE__ */ jsx("div", { className: "flex min-h-full justify-center p-4 text-center items-center sm:p-0", children: /* @__PURE__ */ jsx(
          Transition.Child,
          {
            as: Fragment,
            enter: "ease-out duration-300",
            enterFrom: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95",
            enterTo: "opacity-100 translate-y-0 sm:scale-100",
            leave: "ease-in duration-200",
            leaveFrom: "opacity-100 translate-y-0 sm:scale-100",
            leaveTo: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95",
            children: /* @__PURE__ */ jsxs(Dialog.Panel, { className: "relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 w-full sm:max-w-2xl sm:p-6", children: [
              /* @__PURE__ */ jsx("div", { className: "sm:col-span-3", children: /* @__PURE__ */ jsx("form", { className: "mt-2", children: /* @__PURE__ */ jsxs(FormControl, { fullWidth: true, children: [
                /* @__PURE__ */ jsx(InputLabel, { id: "select-dishes", children: "Dishes" }),
                /* @__PURE__ */ jsx(
                  Select,
                  {
                    labelId: "select-dishes",
                    id: "select-dishes",
                    value: (_a = dishes.at(0)) == null ? void 0 : _a.id,
                    label: "Age",
                    onChange: onInputChangeHandler,
                    children: dishes.map(({ name, id }) => /* @__PURE__ */ jsx(
                      MenuItem$1,
                      {
                        value: id,
                        children: name
                      },
                      id
                    ))
                  }
                )
              ] }) }) }),
              /* @__PURE__ */ jsxs("div", { className: "mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3", children: [
                /* @__PURE__ */ jsx(
                  "button",
                  {
                    type: "button",
                    className: "inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:col-start-2",
                    onClick: onApplyHandler,
                    children: "Apply"
                  }
                ),
                /* @__PURE__ */ jsx(
                  "button",
                  {
                    type: "button",
                    className: "mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:col-start-1 sm:mt-0",
                    onClick: () => setOpen(false),
                    ref: cancelButtonRef,
                    children: "Cancel"
                  }
                )
              ] })
            ] })
          }
        ) }) })
      ]
    }
  ) });
}
function Dropdown({
  menu,
  onApply,
  onRemove,
  item
}) {
  const [onReplace, setOnReplace] = useState(false);
  const availableOptions = menu.options.filter(
    ({ id }) => menu.dishes.find(({ id: dishId }) => dishId === id) === void 0
  );
  return /* @__PURE__ */ jsxs(Menu, { as: "div", className: "relative inline-block text-left", children: [
    /* @__PURE__ */ jsx(
      ReplaceOptionsModal,
      {
        dishes: availableOptions,
        setOpen: setOnReplace,
        onApply,
        open: onReplace
      }
    ),
    /* @__PURE__ */ jsx("div", { children: /* @__PURE__ */ jsxs(Menu.Button, { className: "overflow-visible inline-flex h-8 w-8 items-center justify-center rounded-full bg-white bg-transparent text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2", children: [
      /* @__PURE__ */ jsx("span", { className: "sr-only", children: "Open options" }),
      /* @__PURE__ */ jsx(
        EllipsisVerticalIcon,
        {
          className: "h-5 w-5",
          "aria-hidden": "true"
        }
      )
    ] }) }),
    /* @__PURE__ */ jsx(
      Transition,
      {
        as: Fragment,
        enter: "transition ease-out duration-100",
        enterFrom: "transform opacity-0 scale-95",
        enterTo: "transform opacity-100 scale-100",
        leave: "transition ease-in duration-75",
        leaveFrom: "transform opacity-100 scale-100",
        leaveTo: "transform opacity-0 scale-95",
        children: /* @__PURE__ */ jsx(Menu.Items, { className: "absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none", children: /* @__PURE__ */ jsxs("div", { className: "py-1", children: [
          /* @__PURE__ */ jsx(Menu.Item, { children: ({ active }) => /* @__PURE__ */ jsx(
            "p",
            {
              className: classNames(
                active ? "bg-gray-100 text-gray-900" : "text-gray-700",
                "block px-4 py-2 text-sm"
              ),
              onClick: () => onRemove(item.id),
              children: "Remove"
            }
          ) }),
          /* @__PURE__ */ jsx(Menu.Item, { children: ({ active }) => /* @__PURE__ */ jsx(
            "p",
            {
              onClick: onReplace ? () => setOnReplace(false) : () => setOnReplace(true),
              className: classNames(
                active ? "bg-gray-100 text-gray-900" : "text-gray-700",
                "block px-4 py-2 text-sm"
              ),
              children: "Replace"
            }
          ) })
        ] }) })
      }
    )
  ] });
}
const initialState = {
  menus: [],
  originalMenu: [],
  selectedMenu: null,
  dishes: []
};
const menuSlice = createSlice({
  name: "menu",
  initialState,
  reducers: {
    setMenus: (state, action) => {
      state.menus = action.payload;
      state.originalMenu = action.payload;
    },
    setDishes: (state, action) => {
      state.dishes = action.payload;
    },
    setSelectedMenu: (state, action) => {
      state.selectedMenu = action.payload;
    },
    updateMenuItem: (state, action) => {
      state.menus = state.menus.map((item) => {
        if (item.id === action.payload.id) {
          return {
            ...item,
            ...action.payload
          };
        }
        return item;
      });
      state.selectedMenu = {
        ...state.selectedMenu,
        ...action.payload
      };
    }
  }
});
const { setMenus, updateMenuItem, setSelectedMenu, setDishes } = menuSlice.actions;
const getSelectedMenu = (state) => state.menu.selectedMenu;
menuSlice.reducer;
function MenuItems({ items, menu }) {
  const dispatch = useDispatch();
  const originalMenu = useSelector(
    (state) => state.menu.originalMenu
  );
  const onItemRemoveHanlder = (id) => {
    const updatedMenu = {
      ...menu,
      dishes: menu.dishes.filter((dish) => dish.id !== id)
    };
    dispatch(updateMenuItem(updatedMenu));
  };
  const onUpdateItemsHandler = (id, prevId) => {
    if (id.length === 0)
      return;
    const toReplaceWith = menu.options.find(
      (dish) => dish.id === id
    );
    const dishExists = menu.dishes.find((dish) => dish.id === id);
    if (dishExists)
      return;
    const updatedMenu = {
      ...menu,
      dishes: menu.dishes.map((dish) => {
        if (dish.id === prevId) {
          return toReplaceWith;
        }
        return dish;
      })
    };
    dispatch(updateMenuItem(updatedMenu));
  };
  const onResetItemsHandler = () => {
    const originalItem = originalMenu.find((item) => item.id === menu.id);
    if (!originalItem)
      return;
    const updatedMenu = {
      ...menu,
      dishes: originalItem.dishes
    };
    dispatch(updateMenuItem(updatedMenu));
  };
  return /* @__PURE__ */ jsxs("div", { className: "h-[80px]", children: [
    /* @__PURE__ */ jsxs("div", { className: "flex justify-between", children: [
      /* @__PURE__ */ jsx("h2", { className: "text-sm font-medium text-gray-500", children: "Menu Items" }),
      /* @__PURE__ */ jsx(
        "span",
        {
          className: "text-sm text-red-500 cursor-pointer hover:text-red-400",
          onClick: onResetItemsHandler,
          children: /* @__PURE__ */ jsx("b", { children: "Reset" })
        }
      )
    ] }),
    /* @__PURE__ */ jsx(
      "ul",
      {
        role: "list",
        className: "mt-1 flex max-h-20 flex-col flex-wrap gap-1",
        children: items.map((item) => /* @__PURE__ */ jsx("li", { className: "flex rounded-md shadow-sm", children: /* @__PURE__ */ jsxs("div", { className: "overflow-visible flex flex-1 items-center justify-between rounded-md border border-gray-200 bg-white", children: [
          /* @__PURE__ */ jsx("div", { className: "flex-1 truncate px-4 py-2 text-sm", children: /* @__PURE__ */ jsx("p", { className: "font-medium text-gray-900 hover:text-gray-600", children: item.name }) }),
          /* @__PURE__ */ jsx("div", { className: "flex-shrink-0 pr-2", children: /* @__PURE__ */ jsx(
            Dropdown,
            {
              item,
              onRemove: onItemRemoveHanlder,
              onApply: (id) => onUpdateItemsHandler(id, item.id),
              menu
            }
          ) })
        ] }) }, item.name))
      }
    )
  ] });
}
function CustomizeItem(props) {
  var _a;
  const selectedMenu = useSelector(
    (state) => state.menu.selectedMenu
  );
  return /* @__PURE__ */ jsx("div", { className: "bg-white", children: /* @__PURE__ */ jsx("div", { className: "pb-4 pt-6 sm:pb-4", children: /* @__PURE__ */ jsx("div", { className: "mx-auto mt-8 max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8", children: /* @__PURE__ */ jsxs("div", { className: "lg:grid lg:auto-rows-min lg:grid-cols-12 lg:gap-x-8", children: [
    /* @__PURE__ */ jsx("div", { className: "lg:col-span-5 lg:col-start-8", children: /* @__PURE__ */ jsxs("div", { className: "flex justify-between", children: [
      /* @__PURE__ */ jsx("h1", { className: "text-xl font-medium text-gray-900", children: selectedMenu.name }),
      /* @__PURE__ */ jsx("p", { className: "text-xl font-medium text-gray-900", children: formatNZD(selectedMenu.price) })
    ] }) }),
    /* @__PURE__ */ jsxs("div", { className: "mt-8 lg:col-span-7 lg:col-start-1 lg:row-span-3 lg:row-start-1 lg:mt-0", children: [
      /* @__PURE__ */ jsx("h2", { className: "sr-only", children: "Images" }),
      /* @__PURE__ */ jsxs("div", { className: "grid grid-cols-1 lg:grid-cols-2 lg:grid-rows-2 ", children: [
        /* @__PURE__ */ jsx(
          "img",
          {
            src: ((_a = selectedMenu.media.at(0)) == null ? void 0 : _a.url) || "",
            alt: "Photo fo " + selectedMenu.name,
            className: "col-span-2 row-span-2"
          }
        ),
        /* @__PURE__ */ jsxs("div", { className: "mt-10 col-span-2 ", children: [
          /* @__PURE__ */ jsx("h2", { className: "text-sm font-medium text-gray-900 ", children: "Description" }),
          /* @__PURE__ */ jsx("div", { className: "prose prose-sm mt-4 text-gray-500", children: selectedMenu.description })
        ] })
      ] })
    ] }),
    /* @__PURE__ */ jsxs("div", { className: "mt-8 lg:col-span-5", children: [
      /* @__PURE__ */ jsx(
        MenuItems,
        {
          menu: selectedMenu,
          items: selectedMenu.dishes
        }
      ),
      /* @__PURE__ */ jsx(AddExtraDish, {}),
      /* @__PURE__ */ jsxs("div", { className: "lg:mt-[560px] mt-10 max-w-7xl w-full flex justify-center lg:justify-end items-center gap-2", children: [
        /* @__PURE__ */ jsx(
          "button",
          {
            type: "button",
            className: "inline-flex max-w-xs w-full justify-center rounded-md bg-white px-3 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:col-start-1 sm:mt-0",
            onClick: () => props.setOpen(false),
            ref: props.cancelButtonRef,
            children: "Cancel"
          }
        ),
        /* @__PURE__ */ jsx(
          "button",
          {
            type: "button",
            className: "inline-flex max-w-xs w-full justify-center rounded-md bg-indigo-600 px-3 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:col-start-2",
            onClick: props.onApplyHandler,
            children: "Apply"
          }
        )
      ] })
    ] })
  ] }) }) }) });
}
function CustomizeModal({
  open,
  setOpen
}) {
  const cancelButtonRef = useRef(null);
  const dispatch = useDispatch();
  const selectedMenu = useSelector(getSelectedMenu);
  const onApplyHandler = () => {
    dispatch(updateMenuItem$1(selectedMenu));
    setOpen(false);
  };
  return /* @__PURE__ */ jsx(Transition.Root, { show: open, as: Fragment, children: /* @__PURE__ */ jsxs(
    Dialog,
    {
      as: "div",
      className: "relative z-10",
      initialFocus: cancelButtonRef,
      onClose: setOpen,
      children: [
        /* @__PURE__ */ jsx(
          Transition.Child,
          {
            as: Fragment,
            enter: "ease-out duration-300",
            enterFrom: "opacity-0",
            enterTo: "opacity-100",
            leave: "ease-in duration-200",
            leaveFrom: "opacity-100",
            leaveTo: "opacity-0",
            children: /* @__PURE__ */ jsx("div", { className: "fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" })
          }
        ),
        /* @__PURE__ */ jsx("div", { className: "fixed inset-0 z-10 overflow-y-auto", children: /* @__PURE__ */ jsx("div", { className: "flex min-h-full items-end justify-center text-center sm:items-center sm:p-0", children: /* @__PURE__ */ jsx(
          Transition.Child,
          {
            as: Fragment,
            enter: "ease-out duration-300",
            enterFrom: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95",
            enterTo: "opacity-100 translate-y-0 sm:scale-100",
            leave: "ease-in duration-200",
            leaveFrom: "opacity-100 translate-y-0 sm:scale-100",
            leaveTo: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95",
            children: /* @__PURE__ */ jsx(Dialog.Panel, { className: "relative transform overflow-hidden bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all w-full sm:p-6", children: /* @__PURE__ */ jsx(
              CustomizeItem,
              {
                setOpen,
                cancelButtonRef,
                onApplyHandler
              }
            ) })
          }
        ) }) })
      ]
    }
  ) });
}
function MenuList({ menu }) {
  return /* @__PURE__ */ jsx(Fragment$1, { children: /* @__PURE__ */ jsx("div", { className: "bg-white", children: /* @__PURE__ */ jsxs("div", { className: "max-w-2xl lg:max-w-6xl mx-auto pt-8", children: [
    /* @__PURE__ */ jsx("h2", { className: "text-3xl font-extrabold text-gray-900 pl-4 sm:pl-6", children: "All Menus!" }),
    /* @__PURE__ */ jsx("div", { className: "bg-white", children: /* @__PURE__ */ jsxs("div", { className: "mx-auto max-w-2xl px-4 py-6 sm:px-6  lg:max-w-7xl ", children: [
      /* @__PURE__ */ jsx("h2", { className: "sr-only", children: "Products" }),
      /* @__PURE__ */ jsx("div", { className: "grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-3 lg:gap-x-8", children: menu.map((product) => /* @__PURE__ */ jsx(
        MenuItem,
        {
          product
        },
        product.id
      )) })
    ] }) })
  ] }) }) });
}
function MenuItem({ product }) {
  var _a;
  const [open, setOpen] = useState(false);
  const dispatch = useDispatch();
  const [numOfPeople, setNumOfPeople] = useState(15);
  const addToCartHandler = () => {
    dispatch(addItem({ ...product, numOfPeople }));
  };
  const cartItem = useSelector(
    (state) => state.cart.items.filter((item) => item.id === product.id)
  );
  const onRemoveItemHandler = () => {
    dispatch(removeItem(product.id));
  };
  useEffect(() => {
    dispatch(updateQuantity({ id: product.id, quantity: numOfPeople }));
  }, [numOfPeople]);
  const onCustomizeClickHandler = () => {
    dispatch(setSelectedMenu(product));
    setOpen(true);
  };
  return /* @__PURE__ */ jsx("div", { className: "relative", children: /* @__PURE__ */ jsxs("div", { className: "group flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white", children: [
    /* @__PURE__ */ jsx(CustomizeModal, { open, setOpen }),
    /* @__PURE__ */ jsx("div", { className: "aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96", children: /* @__PURE__ */ jsx(
      "img",
      {
        src: optimizeImage((_a = product.media.at(0)) == null ? void 0 : _a.url),
        alt: "Menu Plate",
        className: "h-full w-full object-cover object-center sm:h-full sm:w-full"
      }
    ) }),
    /* @__PURE__ */ jsxs("div", { className: "flex flex-1 flex-col space-y-2 p-4", children: [
      /* @__PURE__ */ jsx("h3", { className: "text-xl font-medium text-gray-900", children: product.name }),
      /* @__PURE__ */ jsx("p", { className: "text-sm text-gray-700", children: product.description }),
      /* @__PURE__ */ jsx("p", { className: "text-base font-extrabold text-gray-500  pb-4", children: `$${product.price} Per Person` }),
      cartItem.length > 0 ? /* @__PURE__ */ jsxs(Fragment$1, { children: [
        /* @__PURE__ */ jsx(
          PeopleInput,
          {
            state: numOfPeople,
            setState: setNumOfPeople
          }
        ),
        /* @__PURE__ */ jsxs("div", { className: "flex gap-2", children: [
          /* @__PURE__ */ jsx(
            "button",
            {
              onClick: onCustomizeClickHandler,
              className: "mt-8 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2",
              children: "Customize"
            }
          ),
          /* @__PURE__ */ jsx(
            "button",
            {
              onClick: onRemoveItemHandler,
              className: "mt-8 flex w-full items-center justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2",
              children: "Remove"
            }
          )
        ] })
      ] }) : /* @__PURE__ */ jsx(
        "button",
        {
          onClick: addToCartHandler,
          className: "mt-8 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-2 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2",
          children: "Add to cart"
        }
      )
    ] })
  ] }) });
}
function PeopleInput(props) {
  const onIncreaseHandler = () => {
    if (props.state < 200) {
      props.setState(props.state + 1);
    }
  };
  const onDecreaseHandler = () => {
    if (props.state > 15) {
      props.setState(props.state - 1);
    }
  };
  return /* @__PURE__ */ jsxs("div", { children: [
    /* @__PURE__ */ jsx(
      "label",
      {
        htmlFor: "number",
        className: "block text-sm font-medium text-gray-700",
        children: "For how many people?"
      }
    ),
    /* @__PURE__ */ jsxs("div", { className: "mt-1 flex rounded-md shadow-sm", children: [
      /* @__PURE__ */ jsxs("div", { className: "relative flex flex-grow items-stretch focus-within:z-10", children: [
        /* @__PURE__ */ jsx("div", { className: "pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3", children: /* @__PURE__ */ jsx(
          UsersIcon,
          {
            className: "h-5 w-5 text-gray-400",
            "aria-hidden": "true"
          }
        ) }),
        /* @__PURE__ */ jsx(
          "input",
          {
            type: "number",
            name: "number",
            id: "number",
            min: "15",
            max: "200",
            value: props.state,
            onChange: () => null,
            className: "block w-full rounded-none rounded-l-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm",
            placeholder: "Minimum 15 people"
          }
        )
      ] }),
      /* @__PURE__ */ jsx(
        "button",
        {
          type: "button",
          onClick: onDecreaseHandler,
          className: "relative -ml-px inline-flex items-center space-x-2  border border-gray-300 bg-gray-50 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100",
          children: /* @__PURE__ */ jsx(
            MinusIcon,
            {
              className: "h-5 w-5 text-gray-400",
              "aria-hidden": "true"
            }
          )
        }
      ),
      /* @__PURE__ */ jsx(
        "button",
        {
          type: "button",
          onClick: onIncreaseHandler,
          className: "relative -ml-px inline-flex items-center space-x-2 rounded-r-md border border-gray-300 bg-gray-50 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100",
          children: /* @__PURE__ */ jsx(
            PlusIcon,
            {
              className: "h-5 w-5 text-gray-400",
              "aria-hidden": "true"
            }
          )
        }
      )
    ] })
  ] });
}
function Header() {
  return /* @__PURE__ */ jsx(
    "section",
    {
      id: "free-chapters",
      "aria-label": "Free preview",
      className: "scroll-mt-14 bg-blue-600 sm:scroll-mt-32",
      children: /* @__PURE__ */ jsx("div", { className: "overflow-hidden lg:relative", children: /* @__PURE__ */ jsxs(
        Container,
        {
          size: "md",
          className: "relative grid grid-cols-1 items-end gap-y-12 py-20 lg:static lg:grid-cols-2 lg:py-28 xl:py-32",
          children: [
            /* @__PURE__ */ jsx(Pattern, { className: "absolute -top-32 left-0 w-full sm:left-3/4 sm:-top-5 sm:ml-8 sm:w-auto md:left-2/3 lg:left-auto lg:right-2 lg:ml-0 xl:right-auto xl:left-2/3" }),
            /* @__PURE__ */ jsxs("div", { children: [
              /* @__PURE__ */ jsx("h2", { className: "font-display text-5xl font-extrabold tracking-tight text-white sm:w-3/4 sm:text-6xl md:w-2/3 lg:w-auto", children: "Hasina Magic Kitchen" }),
              /* @__PURE__ */ jsx("p", { className: "mt-4 text-lg tracking-tight text-blue-200", children: "Magical meals for your magical momments" })
            ] })
          ]
        }
      ) })
    }
  );
}
const styles = {
  xs: "mx-auto px-4 sm:px-6 md:max-w-2xl md:px-4 lg:px-2",
  sm: "mx-auto px-4 sm:px-6 md:max-w-2xl md:px-4 lg:max-w-4xl lg:px-12",
  md: "mx-auto px-4 sm:px-6 md:max-w-2xl md:px-4 lg:max-w-5xl lg:px-8",
  lg: "mx-auto px-4 sm:px-6 md:max-w-2xl md:px-4 lg:max-w-7xl lg:px-8"
};
function Container({
  size = "sm",
  className,
  ...props
}) {
  return /* @__PURE__ */ jsx("div", { className: clsx(styles[size], className), ...props });
}
const Pattern = ({
  size = 40,
  gapX = 16,
  gapY = 8,
  pattern = [
    [0, 1, 0, 1, 1, 0, 1, 0],
    [1, 0, 1, 1, 0, 0, 0, 1],
    [0, 1, 0, 1, 1, 0, 1, 0],
    [1, 0, 1, 1, 0, 0, 0, 1]
  ],
  ...props
}) => {
  const id = useId();
  const width = pattern[0].length * size + (pattern[0].length - 1) * gapX;
  const height = pattern.length * size + (pattern.length - 1) * gapY;
  return /* @__PURE__ */ jsxs("svg", { "aria-hidden": "true", width, height, ...props, children: [
    /* @__PURE__ */ jsxs("defs", { children: [
      /* @__PURE__ */ jsxs("symbol", { id: `${id}-0`, width: size, height: size, children: [
        /* @__PURE__ */ jsx(
          "rect",
          {
            className: "fill-blue-500",
            width: size,
            height: size
          }
        ),
        /* @__PURE__ */ jsx(
          "circle",
          {
            className: "fill-blue-600",
            cx: size / 2,
            cy: size / 2,
            r: size * (13 / 40)
          }
        )
      ] }),
      /* @__PURE__ */ jsxs("symbol", { id: `${id}-1`, width: size, height: size, children: [
        /* @__PURE__ */ jsx(
          "circle",
          {
            className: "fill-blue-300",
            cx: size / 2,
            cy: size / 2,
            r: size / 2
          }
        ),
        /* @__PURE__ */ jsx(
          "rect",
          {
            className: "fill-blue-600",
            width: size / 2,
            height: size / 2,
            x: size / 4,
            y: size / 4
          }
        )
      ] })
    ] }),
    pattern.map(
      (row, rowIndex) => row.map((shape, columnIndex) => /* @__PURE__ */ jsx(
        "use",
        {
          href: `#${id}-${shape}`,
          x: columnIndex * size + columnIndex * gapX,
          y: rowIndex * size + rowIndex * gapY
        },
        `${rowIndex}-${columnIndex}`
      ))
    )
  ] });
};
const options = [
  {
    name: "Vegetarian",
    imageUrl: "https://images.unsplash.com/photo-1585937421612-70a008356fbe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1036&q=80"
  },
  {
    name: "Vegan",
    imageUrl: "https://images.unsplash.com/photo-1455619452474-d2be8b1e70cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
  },
  {
    name: "Groumet",
    imageUrl: "https://images.unsplash.com/photo-1540420773420-3366772f4999?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=984&q=80"
  }
];
function Filter() {
  return /* @__PURE__ */ jsx(
    "ul",
    {
      role: "list",
      className: "mx-auto px-4 pt-24 pb-16 max-w-6xl gap-5 sm:gap-10 flex flex-wrap justify-center items-center overflow-y-scroll",
      children: options.map((option) => /* @__PURE__ */ jsxs(
        "li",
        {
          className: "flex flex-col justify-center items-center",
          children: [
            /* @__PURE__ */ jsx(
              "img",
              {
                className: "mx-auto h-24 w-24 rounded-full border-8 border-blue-100",
                src: option.imageUrl,
                alt: ""
              }
            ),
            /* @__PURE__ */ jsx("h3", { className: "mt-6 text-md font-extrabold leading-7 tracking-tight text-gray-900", children: option.name })
          ]
        },
        option.name
      ))
    }
  );
}
function Home({
  menu,
  dishes
}) {
  const dispatch = useDispatch();
  const menus = useSelector((state) => state.menu.menus);
  const storeDishes = useSelector((state) => state.menu.dishes);
  useEffect(() => {
    if (menus.length > 0)
      return;
    dispatch(setMenus(menu));
    if (storeDishes.length > 0)
      return;
    dispatch(setDishes(dishes));
  }, []);
  return /* @__PURE__ */ jsxs(Fragment$1, { children: [
    /* @__PURE__ */ jsx(Head, { title: "Menu" }),
    /* @__PURE__ */ jsx(Example, {}),
    /* @__PURE__ */ jsx(Header, {}),
    /* @__PURE__ */ jsx(Filter, {}),
    /* @__PURE__ */ jsx(MenuList, { menu: menus }),
    /* @__PURE__ */ jsx(Footer, {})
  ] });
}
export {
  Home as default
};
