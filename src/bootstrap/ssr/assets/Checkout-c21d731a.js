import { j as jsx, a as jsxs, F as Fragment$1 } from "../ssr.js";
import { useState, useEffect, Fragment } from "react";
import { E as Example, F as Footer, c as classNames } from "./Footer-5adae4d0.js";
import { useElements, useStripe, PaymentElement } from "@stripe/react-stripe-js";
import { Head, useForm, router } from "@inertiajs/react";
import axios from "axios";
import { f as formatNZD } from "./currentcy-32efd882.js";
import { LocalizationProvider } from "@mui/x-date-pickers/LocalizationProvider/index.js";
import { AdapterDayjs } from "@mui/x-date-pickers/AdapterDayjs/index.js";
import { DesktopDatePicker } from "@mui/x-date-pickers";
import { P as PhoneNumberInput } from "./PhoneNumberInput-99827722.js";
import { z } from "zod";
import { Transition, Dialog } from "@headlessui/react";
import { ExclamationCircleIcon } from "@heroicons/react/24/outline";
import { useSelector } from "react-redux/es/hooks/useSelector.js";
import { s as selectCartTotal, r as removeItem, a as removeAddon, c as clearCart } from "./cart-1daccc86.js";
import { EnvelopeIcon, InformationCircleIcon } from "@heroicons/react/20/solid";
import { TimePicker } from "@mui/x-date-pickers/TimePicker/index.js";
import dayjs from "dayjs";
import { useDispatch } from "react-redux";
import { o as optimizeImage } from "./cloudinary-5ac51cec.js";
import "react/jsx-runtime";
import "react-dom/server";
import "@inertiajs/react/server";
import "@reduxjs/toolkit";
function BasicDateCalendar({
  setState,
  setError
}) {
  const onDateChangeHandler = (value) => {
    setState(`${value.$D}-${value.$M}-${value.$y}`);
  };
  const onErrorHandler = () => {
    setError("Please select a valid date");
  };
  return /* @__PURE__ */ jsx(LocalizationProvider, { dateAdapter: AdapterDayjs, children: /* @__PURE__ */ jsx(
    DesktopDatePicker,
    {
      onError: onErrorHandler,
      label: "Order date",
      disablePast: true,
      onChange: (e) => onDateChangeHandler(
        e
      )
    }
  ) });
}
function AddressInput(props) {
  const [address1, setAddress1] = useState("");
  const [suburb, setSuburb] = useState("");
  const [city, setCity] = useState("Auckland");
  const [postCode, setPostCode] = useState("");
  const [__, setHasError] = useState(false);
  let timeout;
  const debounce = function(func, delay) {
    clearTimeout(timeout);
    timeout = setTimeout(func, delay);
  };
  useEffect(() => {
    const address = {
      address1,
      suburb,
      city,
      postCode
    };
    debounce(() => {
      props.setIsAddressValidated(false);
      return axios.post("/api/validate/address", {
        address: `${address1}, ${suburb}`
      }).then((result) => {
        const isValid = result.data.validation_result;
        setHasError(!isValid);
        if (!isValid) {
          props.setError("Invalid address");
        } else {
          props.setError(null);
        }
        props.setIsAddressValidated(true);
      });
    }, 200);
    props.setState(`${address.address1}, ${address.suburb}`);
  }, [address1, suburb, city, postCode]);
  return /* @__PURE__ */ jsx("div", { children: /* @__PURE__ */ jsxs("fieldset", { children: [
    /* @__PURE__ */ jsx("legend", { className: "block text-sm font-medium text-gray-700", children: "Delivery Address" }),
    /* @__PURE__ */ jsxs("div", { className: "mt-1 -space-y-px rounded-md bg-white shadow-sm", children: [
      /* @__PURE__ */ jsxs("div", { children: [
        /* @__PURE__ */ jsx("label", { htmlFor: "address", className: "sr-only", children: "Address Line 1" }),
        /* @__PURE__ */ jsx(
          "input",
          {
            value: address1,
            onChange: ({ target }) => setAddress1(target.value),
            type: "text",
            name: "address",
            id: "address",
            className: "relative block w-full rounded-none rounded-t-md border-gray-300 bg-transparent focus:z-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm",
            placeholder: "Address Line 1"
          }
        )
      ] }),
      /* @__PURE__ */ jsxs("div", { children: [
        /* @__PURE__ */ jsx("label", { htmlFor: "suburb", className: "sr-only", children: "Suburb" }),
        /* @__PURE__ */ jsx(
          "input",
          {
            value: suburb,
            onChange: ({ target }) => setSuburb(target.value),
            type: "text",
            name: "suburb",
            id: "suburb",
            className: "relative block w-full rounded-none border-gray-300 bg-transparent focus:z-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm",
            placeholder: "Suburb"
          }
        )
      ] }),
      /* @__PURE__ */ jsxs("div", { className: "flex -space-x-px", children: [
        /* @__PURE__ */ jsxs("div", { className: "w-1/2 min-w-0 flex-1", children: [
          /* @__PURE__ */ jsx("label", { htmlFor: "city", className: "sr-only", children: "City" }),
          /* @__PURE__ */ jsx(
            "input",
            {
              disabled: true,
              onChange: ({ target }) => setCity(target.value),
              value: city,
              type: "text",
              name: "city",
              id: "city",
              className: "relative block w-full rounded-none rounded-bl-md border-gray-300 bg-gray-100 text-gray-400 sm:text-sm",
              placeholder: "Auckland"
            }
          )
        ] }),
        /* @__PURE__ */ jsxs("div", { className: "min-w-0 flex-1", children: [
          /* @__PURE__ */ jsx("label", { htmlFor: "postcode", className: "sr-only", children: "Postcode" }),
          /* @__PURE__ */ jsx(
            "input",
            {
              value: postCode,
              onChange: ({ target }) => setPostCode(target.value),
              type: "text",
              name: "postcode",
              id: "postcode",
              className: "relative block w-full rounded-none rounded-br-md border-gray-300 bg-transparent focus:z-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm",
              placeholder: "Postcode"
            }
          )
        ] })
      ] })
    ] })
  ] }) });
}
function OrderFailed({
  open,
  setOpen
}) {
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
    /* @__PURE__ */ jsx("div", { className: "fixed inset-0 z-10 overflow-y-auto", children: /* @__PURE__ */ jsx("div", { className: "flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0", children: /* @__PURE__ */ jsx(
      Transition.Child,
      {
        as: Fragment,
        enter: "ease-out duration-300",
        enterFrom: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95",
        enterTo: "opacity-100 translate-y-0 sm:scale-100",
        leave: "ease-in duration-200",
        leaveFrom: "opacity-100 translate-y-0 sm:scale-100",
        leaveTo: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95",
        children: /* @__PURE__ */ jsxs(Dialog.Panel, { className: "relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6", children: [
          /* @__PURE__ */ jsxs("div", { children: [
            /* @__PURE__ */ jsx("div", { className: "mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-red-100", children: /* @__PURE__ */ jsx(
              ExclamationCircleIcon,
              {
                className: "h-6 w-6 text-red-600",
                "aria-hidden": "true"
              }
            ) }),
            /* @__PURE__ */ jsxs("div", { className: "mt-3 text-center sm:mt-5", children: [
              /* @__PURE__ */ jsx(
                Dialog.Title,
                {
                  as: "h3",
                  className: "text-base font-semibold leading-6 text-gray-900",
                  children: "Order Placement Failure"
                }
              ),
              /* @__PURE__ */ jsx("div", { className: "mt-2", children: /* @__PURE__ */ jsx("p", { className: "text-sm text-gray-500", children: "We apologize for the inconvenience, but it seems that your order placement has encountered an issue." }) })
            ] })
          ] }),
          /* @__PURE__ */ jsx("div", { className: "mt-5 sm:mt-6", children: /* @__PURE__ */ jsx(
            "button",
            {
              type: "button",
              className: "inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600",
              onClick: () => setOpen(false),
              children: "Cancel"
            }
          ) })
        ] })
      }
    ) }) })
  ] }) });
}
function EmailInput(props) {
  return /* @__PURE__ */ jsxs("div", { children: [
    /* @__PURE__ */ jsx(
      "label",
      {
        htmlFor: "email",
        className: "block text-sm font-medium text-gray-700",
        children: "Email"
      }
    ),
    /* @__PURE__ */ jsxs("div", { className: "relative mt-1 rounded-md shadow-sm", children: [
      /* @__PURE__ */ jsx("div", { className: "pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3", children: /* @__PURE__ */ jsx(
        EnvelopeIcon,
        {
          className: "h-5 w-5 text-gray-400",
          "aria-hidden": "true"
        }
      ) }),
      /* @__PURE__ */ jsx(
        "input",
        {
          value: props.state,
          onChange: (e) => props.setState(e.target.value),
          type: "email",
          name: "email",
          id: "email",
          className: "block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm",
          placeholder: "you@example.com"
        }
      )
    ] })
  ] });
}
const fiveAM = dayjs().set("hour", 5).startOf("hour");
const ninePM = dayjs().set("hour", 22).startOf("hour");
function TimeInput(props) {
  const timeChangeHandler = (value) => {
    const time = value == null ? void 0 : value.format("HH:MM");
    props.setState(`${time}`);
  };
  const onErrorHandler = (error) => {
    if (error === "minTime" || error === "maxTime") {
      props.setError("Please select a valid time");
    }
  };
  return /* @__PURE__ */ jsx(LocalizationProvider, { dateAdapter: AdapterDayjs, children: /* @__PURE__ */ jsx(
    TimePicker,
    {
      onError: onErrorHandler,
      minTime: fiveAM,
      maxTime: ninePM,
      label: "Order time",
      onChange: timeChangeHandler
    }
  ) });
}
function NameInput(props) {
  return /* @__PURE__ */ jsxs("div", { children: [
    /* @__PURE__ */ jsx(
      "label",
      {
        htmlFor: "first-name",
        className: "block text-sm font-medium leading-6 text-gray-900",
        children: "Name"
      }
    ),
    /* @__PURE__ */ jsx("div", { className: "mt-2", children: /* @__PURE__ */ jsx(
      "input",
      {
        value: props.state,
        onChange: (e) => props.setState(e.target.value),
        type: "text",
        name: "first-name",
        id: "first-name",
        autoComplete: "given-name",
        className: "block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
      }
    ) })
  ] });
}
function NoteInput(props) {
  return /* @__PURE__ */ jsx(Fragment$1, { children: /* @__PURE__ */ jsxs("div", { children: [
    /* @__PURE__ */ jsx(
      "label",
      {
        htmlFor: "about",
        className: "block text-sm font-medium leading-6 text-gray-700",
        children: "Note"
      }
    ),
    /* @__PURE__ */ jsx("div", { className: "mt-2", children: /* @__PURE__ */ jsx(
      "textarea",
      {
        value: props.state,
        onChange: (e) => props.setState(e.target.value),
        id: "about",
        name: "about",
        rows: 3,
        className: "block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
      }
    ) }),
    /* @__PURE__ */ jsx("p", { className: "mt-3 text-sm leading-6 text-gray-600", children: "Anything we should know? tell us!" })
  ] }) });
}
const DEV_FEE = 25;
const GST = 0.15;
function Checkout() {
  return /* @__PURE__ */ jsxs(Fragment$1, { children: [
    /* @__PURE__ */ jsx(Head, { title: "Checkout" }),
    /* @__PURE__ */ jsx(Example, {}),
    /* @__PURE__ */ jsx(InfoSection, {}),
    /* @__PURE__ */ jsx(Footer, {})
  ] });
}
function InfoSection() {
  const { setData, data, errors, setError, clearErrors, isDirty } = useForm({
    customer_name: "",
    address: "",
    date: "",
    time: "",
    phone: 0,
    email: "",
    note: ""
  });
  const elements = useElements();
  const stripe = useStripe();
  const dispatch = useDispatch();
  const [__, setErrorMessage] = useState("");
  const [orderFailedModal, setOrderFailedModal] = useState(false);
  const [loading, setLoading] = useState(false);
  const cartItems = useSelector((state) => state.cart.items);
  const cartTotal = useSelector(selectCartTotal);
  const cartAddons = useSelector((state) => state.cart.addons);
  const [isAddressValidated, setIsAddressValidated] = useState(false);
  const disableBtn = loading || !isDirty || cartItems.length === 0 || !isAddressValidated;
  const formSchema = z.object({
    customer_name: z.string().min(2).max(20),
    address: z.string().min(5).max(80),
    date: z.string().min(8).max(10),
    time: z.string().min(4).max(5),
    phone: z.string().min(6).max(14),
    email: z.string().email(),
    note: z.string().max(600).optional()
  });
  const errorMessages = {
    customer_name: "Name is required and should be 2 to 20 characters long.",
    address: "Address is required and must be valid.",
    date: "Date is required.",
    time: "Time is required.",
    phone: "Mobile number is required and must be valid.",
    email: "Email is required and must be valid.",
    note: "Note should not exceed 600 characters"
  };
  const handleError = (error) => {
    setLoading(false);
    setErrorMessage(error.message);
  };
  const removeCartItem = (item) => {
    dispatch(removeItem(item.id));
  };
  const removeAddonHandler = (addon) => {
    dispatch(removeAddon(addon.id));
  };
  const formHandler = async (e) => {
    var _a;
    e.preventDefault();
    if (!stripe) {
      return;
    }
    const submittedElements = await (elements == null ? void 0 : elements.submit());
    clearErrors();
    const results = formSchema.safeParse({ ...data });
    if (!results.success) {
      results.error.issues.forEach((issue) => {
        setError(
          issue.path.at(0),
          errorMessages[issue.path.at(0)]
        );
      });
      return;
    }
    if (submittedElements == null ? void 0 : submittedElements.error) {
      handleError(submittedElements.error);
      return;
    }
    const order = {
      customer_name: data.customer_name,
      phone: data.phone,
      email: data.email,
      address: data.address,
      date: data.date,
      time: data.time.toString(),
      note: data.note,
      items: cartItems.map(({ id, dishes, numOfPeople }) => ({
        menu_id: id,
        dishes: dishes.map(({ id: id2 }) => id2),
        quantity: numOfPeople
      })),
      addons: cartAddons
    };
    if (!elements)
      return;
    try {
      setLoading(true);
      const { data: data2 } = await axios.post(route("order.add"), order);
      const paymentMethod = await (stripe == null ? void 0 : stripe.createPaymentMethod({
        elements
      }));
      await (stripe == null ? void 0 : stripe.confirmCardPayment(data2.client_secret, {
        payment_method: (_a = paymentMethod == null ? void 0 : paymentMethod.paymentMethod) == null ? void 0 : _a.id
      }));
      dispatch(clearCart());
      router.visit(route("order.summary", { id: data2.id }));
    } catch (err) {
      console.log(err);
      setOrderFailedModal(true);
    } finally {
      setLoading(false);
    }
  };
  function calculateGST(price) {
    const result = price * GST;
    return result;
  }
  const getTotal = (price) => {
    const tax = calculateGST(price);
    return price + tax + DEV_FEE;
  };
  return /* @__PURE__ */ jsxs("div", { className: "bg-white relative", children: [
    /* @__PURE__ */ jsx(
      OrderFailed,
      {
        open: orderFailedModal,
        setOpen: setOrderFailedModal
      }
    ),
    /* @__PURE__ */ jsx(
      "div",
      {
        className: "absolute left-0 top-0 hidden h-full w-1/2 bg-white lg:block",
        "aria-hidden": "true"
      }
    ),
    /* @__PURE__ */ jsx(
      "div",
      {
        className: "absolute right-0 top-0 hidden h-full w-1/2 bg-gray-100 lg:block",
        "aria-hidden": "true"
      }
    ),
    /* @__PURE__ */ jsxs("div", { className: "relative mx-auto grid max-w-7xl grid-cols-1 gap-x-16 lg:grid-cols-2 lg:px-8 lg:pt-16", children: [
      /* @__PURE__ */ jsx("h1", { className: "sr-only", children: "Checkout" }),
      /* @__PURE__ */ jsxs(
        "section",
        {
          "aria-labelledby": "summary-heading",
          className: "row-start-2 bg-gray-100 py-12 text-gray-500 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0",
          children: [
            /* @__PURE__ */ jsxs("div", { className: "mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0", children: [
              /* @__PURE__ */ jsx("h2", { id: "summary-heading", className: "sr-only", children: "Order summary" }),
              cartItems.length === 0 && /* @__PURE__ */ jsx("div", { className: "rounded-md bg-blue-50 p-4", children: /* @__PURE__ */ jsxs("div", { className: "flex mb-2 rounded-md", children: [
                /* @__PURE__ */ jsx("div", { className: "flex-shrink-0", children: /* @__PURE__ */ jsx(
                  InformationCircleIcon,
                  {
                    className: "h-5 w-5 text-blue-400",
                    "aria-hidden": "true"
                  }
                ) }),
                /* @__PURE__ */ jsx("div", { className: "ml-3 flex-1 md:flex md:justify-between", children: /* @__PURE__ */ jsx("p", { className: "text-sm text-blue-700", children: "Your cart is empty!" }) })
              ] }) }),
              /* @__PURE__ */ jsx(
                "ul",
                {
                  role: "list",
                  className: "divide-y divide-white divide-opacity-10 text-sm font-medium",
                  children: cartItems.map((item) => {
                    var _a;
                    return /* @__PURE__ */ jsxs(
                      "li",
                      {
                        className: "flex items-start space-x-4 py-6",
                        children: [
                          /* @__PURE__ */ jsx(
                            "img",
                            {
                              src: optimizeImage(
                                (_a = item.media.at(0)) == null ? void 0 : _a.url,
                                300,
                                300
                              ),
                              alt: `Image of ${item.name} menu`,
                              className: "border h-20 w-20 flex-none rounded-md object-cover object-center"
                            }
                          ),
                          /* @__PURE__ */ jsxs("div", { className: "flex-auto space-y-1", children: [
                            /* @__PURE__ */ jsx("h3", { className: "text-black", children: item.name }),
                            /* @__PURE__ */ jsx("p", { children: item.description }),
                            /* @__PURE__ */ jsx("p", { className: "text-gray-900 font-extrabold", children: `For ${item.numOfPeople} people` })
                          ] }),
                          /* @__PURE__ */ jsxs("div", { children: [
                            /* @__PURE__ */ jsx("p", { className: "flex-none text-base font-medium text-black mb-2", children: formatNZD(item.price) }),
                            /* @__PURE__ */ jsx(
                              "p",
                              {
                                onClick: () => removeCartItem(item),
                                className: "text-sm text-red-600 cursor-pointer hover:text-red-300",
                                children: /* @__PURE__ */ jsx("b", { children: "Remove" })
                              }
                            )
                          ] })
                        ]
                      },
                      item.id
                    );
                  })
                }
              ),
              cartAddons.length > 0 && /* @__PURE__ */ jsx("h3", { className: "text-md", children: "Addons" }),
              /* @__PURE__ */ jsx(
                "ul",
                {
                  role: "list",
                  className: "divide-y divide-white divide-opacity-10 text-sm font-medium",
                  children: cartAddons.map((item) => {
                    var _a;
                    return /* @__PURE__ */ jsxs(
                      "li",
                      {
                        className: "flex items-start space-x-4 py-6",
                        children: [
                          /* @__PURE__ */ jsx(
                            "img",
                            {
                              src: optimizeImage(
                                (_a = item.media.at(0)) == null ? void 0 : _a.url,
                                300,
                                300
                              ),
                              alt: `Image of ${item.name} menu`,
                              className: "border h-20 w-20 flex-none rounded-md object-cover object-center"
                            }
                          ),
                          /* @__PURE__ */ jsxs("div", { className: "flex-auto space-y-1", children: [
                            /* @__PURE__ */ jsx("h3", { className: "text-black", children: item.name }),
                            /* @__PURE__ */ jsx("p", { children: item.description }),
                            /* @__PURE__ */ jsxs("p", { className: "text-gray-900 font-extrabold", children: [
                              /* @__PURE__ */ jsx("b", { children: "Qty: " }),
                              "$",
                              item.quantity
                            ] })
                          ] }),
                          /* @__PURE__ */ jsxs("div", { children: [
                            /* @__PURE__ */ jsx("p", { className: "flex-none text-base font-medium text-black mb-2", children: formatNZD(item.price) }),
                            /* @__PURE__ */ jsx(
                              "p",
                              {
                                onClick: () => removeAddonHandler(item),
                                className: "text-sm text-red-600 cursor-pointer hover:text-red-300",
                                children: /* @__PURE__ */ jsx("b", { children: "Remove" })
                              }
                            )
                          ] })
                        ]
                      },
                      item.id
                    );
                  })
                }
              ),
              /* @__PURE__ */ jsxs("dl", { className: "space-y-6 border-t border-black border-opacity-10 pt-6 text-sm font-medium", children: [
                /* @__PURE__ */ jsxs("div", { className: "flex items-center justify-between", children: [
                  /* @__PURE__ */ jsx("dt", { children: "Subtotal" }),
                  /* @__PURE__ */ jsx("dd", { children: formatNZD(cartTotal) })
                ] }),
                /* @__PURE__ */ jsxs("div", { className: "flex items-center justify-between", children: [
                  /* @__PURE__ */ jsx("dt", { children: "Shipping" }),
                  /* @__PURE__ */ jsx("dd", { children: formatNZD(DEV_FEE) })
                ] }),
                /* @__PURE__ */ jsxs("div", { className: "flex items-center justify-between", children: [
                  /* @__PURE__ */ jsx("dt", { children: "GST" }),
                  /* @__PURE__ */ jsx("dd", { children: formatNZD(calculateGST(cartTotal)) })
                ] }),
                /* @__PURE__ */ jsxs("div", { className: "flex items-center justify-between border-t border-black border-opacity-10 pt-6 text-black", children: [
                  /* @__PURE__ */ jsx("dt", { className: "text-base", children: "Total" }),
                  /* @__PURE__ */ jsxs("dd", { className: "text-base", children: [
                    formatNZD(getTotal(cartTotal)),
                    " NZD"
                  ] })
                ] })
              ] })
            ] }),
            /* @__PURE__ */ jsx("div", { className: "mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0 mt-6", children: /* @__PURE__ */ jsx(PaymentElement, {}) }),
            /* @__PURE__ */ jsx("div", { className: "mt-10 flex justify-end border-t border-gray-200 pt-6", children: /* @__PURE__ */ jsx(
              "button",
              {
                form: "checkout-form",
                disabled: disableBtn,
                type: "submit",
                className: classNames(
                  "rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50",
                  !disableBtn && "hover:bg-indigo-700",
                  disableBtn && "disabled",
                  disableBtn && "opacity-50",
                  disableBtn && "cursor-not-allowed"
                ),
                children: loading ? "Submitting.." : "Pay now"
              }
            ) })
          ]
        }
      ),
      /* @__PURE__ */ jsxs(
        "section",
        {
          "aria-labelledby": "payment-and-shipping-heading",
          className: "py-16 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:pb-24 lg:pt-0",
          children: [
            /* @__PURE__ */ jsx("h2", { id: "payment-and-shipping-heading", className: "sr-only", children: "Delivery details" }),
            /* @__PURE__ */ jsx("form", { onSubmit: formHandler, id: "checkout-form", children: /* @__PURE__ */ jsxs("div", { className: "@container mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0 flex flex-col gap-3.5", children: [
              /* @__PURE__ */ jsxs("div", { children: [
                /* @__PURE__ */ jsx("h3", { className: "text-lg font-medium text-gray-900", children: "Delivery date & time" }),
                /* @__PURE__ */ jsxs("div", { className: "mt-6 flex flex-col gap-3.5", children: [
                  /* @__PURE__ */ jsx(
                    BasicDateCalendar,
                    {
                      setState: (value) => setData("date", value),
                      setError: (value) => setError("date", value)
                    }
                  ),
                  errors.date && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs ml-1", children: errors.date }),
                  /* @__PURE__ */ jsx(
                    TimeInput,
                    {
                      state: data.time,
                      setState: (time) => setData("time", time),
                      setError: (error) => setError("time", error)
                    }
                  ),
                  errors.time && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs ml-1", children: errors.time })
                ] })
              ] }),
              /* @__PURE__ */ jsxs("div", { className: "mt-10", children: [
                /* @__PURE__ */ jsx("h3", { className: "text-lg font-medium text-gray-900", children: "Personal information" }),
                /* @__PURE__ */ jsxs("div", { className: "mt-6 flex flex-col gap-3.5", children: [
                  /* @__PURE__ */ jsx(
                    NameInput,
                    {
                      state: data.customer_name,
                      setState: (name) => setData("customer_name", name)
                    }
                  ),
                  errors.customer_name && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs ml-1", children: errors.customer_name }),
                  /* @__PURE__ */ jsx(
                    PhoneNumberInput,
                    {
                      state: data.phone,
                      setState: (number) => setData(
                        "phone",
                        number
                      )
                    }
                  ),
                  errors.phone && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs ml-1", children: errors.phone }),
                  /* @__PURE__ */ jsx(
                    EmailInput,
                    {
                      state: data.email,
                      setState: (email) => setData("email", email)
                    }
                  ),
                  errors.email && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs ml-1", children: errors.email }),
                  /* @__PURE__ */ jsx(
                    AddressInput,
                    {
                      isAddressValidated,
                      setIsAddressValidated,
                      setState: (address) => setData("address", address),
                      setError: (error) => {
                        error === null ? clearErrors("address") : setError("address", error);
                      }
                    }
                  ),
                  !isAddressValidated && isDirty && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-green-500 text-xs ml-1", children: "waiting for validation..." }),
                  errors.address && isAddressValidated && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs ml-1", children: errors.address }),
                  /* @__PURE__ */ jsx(
                    NoteInput,
                    {
                      state: data.note,
                      setState: (note) => setData("note", note)
                    }
                  ),
                  errors.note && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs ml-1", children: errors.note })
                ] })
              ] })
            ] }) })
          ]
        }
      )
    ] })
  ] });
}
export {
  Checkout as default
};
