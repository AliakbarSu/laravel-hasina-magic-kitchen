import { a as jsxs, j as jsx, F as Fragment } from "../ssr.js";
import { Disclosure } from "@headlessui/react";
import { MinusSmallIcon, PlusSmallIcon } from "@heroicons/react/24/outline";
import { Head } from "@inertiajs/react";
import { E as Example, F as Footer } from "./Footer-5adae4d0.js";
import "react/jsx-runtime";
import "react-dom/server";
import "@inertiajs/react/server";
import "react-redux";
const faqs = [
  {
    question: "What kind of food does your business offer?",
    answer: "We specialize in providing authentic Middle Eastern cuisine, including a variety of delicious dishes like shawarma, falafel, hummus, kebabs, and more."
  },
  {
    question: "Can I place my order online?",
    answer: "Absolutely! We have a user-friendly online ordering system on our website where you can browse our menu, select your desired items, and place your order conveniently."
  },
  {
    question: "How long does it take for my order to be ready?",
    answer: "We strive to prepare your order with care and attention to detail. It typically takes 5 business days for us to process and have your food ready for delivery."
  },
  {
    question: "Do you offer delivery services?",
    answer: "Yes, we provide delivery services for our customers. Once your order is ready, our dedicated delivery team will ensure that your food is safely and promptly delivered to your doorstep."
  },
  {
    question: "Is there an option for pick-up?",
    answer: "Currently, we only offer delivery services, and we do not have a pick-up option available. We want to ensure a convenient and hassle-free experience for our customers."
  },
  {
    question: "What are your delivery areas?",
    answer: "We offer delivery within a specified radius from our location. Please check our website or contact our customer support to find out if we deliver to your area."
  },
  {
    question: "Are there any delivery charges?",
    answer: "Delivery charges may apply based on your location. The exact delivery fee will be calculated and displayed during the checkout process on our website."
  },
  {
    question: "Can I make special requests or customize my order?",
    answer: "Certainly! We understand that everyone has unique preferences. We provide an option to add specific instructions or make special requests while placing your order online. We will do our best to accommodate your requests."
  },
  {
    question: "Do you offer vegetarian or vegan options?",
    answer: "Yes, we have a range of vegetarian and vegan options available on our menu. We strive to cater to diverse dietary preferences and ensure there's something for everyone."
  },
  {
    question: "What payment methods do you accept?",
    answer: "We accept various payment methods, including major credit cards, debit cards, and online payment platforms. You can choose your preferred payment method during the checkout process on our website."
  },
  {
    question: "Can I cancel or modify my order?",
    answer: "Once an order is placed, we start preparing it promptly. Therefore, we encourage you to contact our customer support as soon as possible if you need to cancel or modify your order. We will do our best to accommodate your request."
  },
  {
    question: "Do you cater to large gatherings or events?",
    answer: "Yes, we offer catering services for large gatherings and events. Please reach out to our customer support in advance to discuss your specific requirements and arrange for a memorable culinary experience."
  }
];
function FAQS() {
  return /* @__PURE__ */ jsxs("div", { className: "bg-white", children: [
    /* @__PURE__ */ jsx(Head, { title: "FAQS" }),
    /* @__PURE__ */ jsx(Example, {}),
    /* @__PURE__ */ jsx("div", { className: "mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8 lg:py-40", children: /* @__PURE__ */ jsxs("div", { className: "mx-auto max-w-4xl divide-y divide-gray-900/10", children: [
      /* @__PURE__ */ jsx("h2", { className: "text-2xl font-bold leading-10 tracking-tight text-gray-900", children: "Frequently asked questions" }),
      /* @__PURE__ */ jsx("dl", { className: "mt-10 space-y-6 divide-y divide-gray-900/10", children: faqs.map((faq) => /* @__PURE__ */ jsx(
        Disclosure,
        {
          as: "div",
          className: "pt-6",
          children: ({ open }) => /* @__PURE__ */ jsxs(Fragment, { children: [
            /* @__PURE__ */ jsx("dt", { children: /* @__PURE__ */ jsxs(Disclosure.Button, { className: "flex w-full items-start justify-between text-left text-gray-900", children: [
              /* @__PURE__ */ jsx("span", { className: "text-base font-semibold leading-7", children: faq.question }),
              /* @__PURE__ */ jsx("span", { className: "ml-6 flex h-7 items-center", children: open ? /* @__PURE__ */ jsx(
                MinusSmallIcon,
                {
                  className: "h-6 w-6",
                  "aria-hidden": "true"
                }
              ) : /* @__PURE__ */ jsx(
                PlusSmallIcon,
                {
                  className: "h-6 w-6",
                  "aria-hidden": "true"
                }
              ) })
            ] }) }),
            /* @__PURE__ */ jsx(
              Disclosure.Panel,
              {
                as: "dd",
                className: "mt-2 pr-12",
                children: /* @__PURE__ */ jsx("p", { className: "text-base leading-7 text-gray-600", children: faq.answer })
              }
            )
          ] })
        },
        faq.question
      )) })
    ] }) }),
    /* @__PURE__ */ jsx(Footer, {})
  ] });
}
export {
  FAQS as default
};
