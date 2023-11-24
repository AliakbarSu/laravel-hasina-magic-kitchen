import { a as jsxs, F as Fragment, j as jsx } from "../ssr.js";
import { f as formatNZD } from "./currentcy-32efd882.js";
import { E as Example, F as Footer } from "./Footer-5adae4d0.js";
import { Head, Link } from "@inertiajs/react";
import dayjs from "dayjs";
import { useState } from "react";
import { o as optimizeImage } from "./cloudinary-5ac51cec.js";
import "react/jsx-runtime";
import "react-dom/server";
import "@inertiajs/react/server";
import "@headlessui/react";
import "@heroicons/react/24/outline";
import "react-redux";
function OrderSummaries({ order }) {
  const [print, setPrint] = useState(false);
  const getTime = (time) => {
    return {
      h: time.split(":").at(0) || 0,
      m: time.split(":").at(1) || 0
    };
  };
  const savePage = () => {
    setPrint(true);
    setTimeout(() => {
      window.print();
      setPrint(false);
    }, 100);
  };
  return /* @__PURE__ */ jsxs(Fragment, { children: [
    /* @__PURE__ */ jsx(Head, { title: "Order Summaries" }),
    !print && /* @__PURE__ */ jsx(Example, {}),
    /* @__PURE__ */ jsx("main", { className: "relative lg:min-h-full flex justify-center", children: /* @__PURE__ */ jsx("div", { children: /* @__PURE__ */ jsx("div", { className: "mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:gap-x-8 lg:px-8 lg:py-32 xl:gap-x-24", children: /* @__PURE__ */ jsxs("div", { className: "lg:col-start-2", children: [
      !print ? /* @__PURE__ */ jsxs("div", { className: "flex justify-between", children: [
        /* @__PURE__ */ jsx("h1", { className: "text-sm font-medium text-indigo-600", children: "Payment successful" }),
        /* @__PURE__ */ jsx(
          "button",
          {
            onClick: savePage,
            type: "button",
            className: "rounded bg-indigo-600 px-2 py-1 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600",
            children: "Save as PDF"
          }
        )
      ] }) : /* @__PURE__ */ jsx("div", { className: "flex justify-between", children: /* @__PURE__ */ jsxs("h1", { className: "text-sm font-medium text-indigo-600", children: [
        /* @__PURE__ */ jsx("b", { children: "Customer Name: " }),
        order.customer_name
      ] }) }),
      !print && /* @__PURE__ */ jsx("p", { className: "mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl", children: "Thanks for ordering" }),
      !print && /* @__PURE__ */ jsx("p", { className: "mt-2 text-base text-gray-500", children: "We appreciate your order, we’re currently processing it. So hang tight and we’ll send you confirmation very soon!" }),
      /* @__PURE__ */ jsxs("dl", { className: "mt-16 text-sm font-medium", children: [
        /* @__PURE__ */ jsx("dt", { className: "text-gray-900", children: "Order ID" }),
        /* @__PURE__ */ jsx("dd", { className: "mt-2 text-indigo-600", children: order.id })
      ] }),
      /* @__PURE__ */ jsx(
        "ul",
        {
          role: "list",
          className: "mt-6 divide-y divide-gray-200 border-t border-gray-200 text-sm font-medium text-gray-500",
          children: order.items.map((item) => {
            var _a;
            return /* @__PURE__ */ jsxs(
              "li",
              {
                className: "flex space-x-6 py-6",
                children: [
                  /* @__PURE__ */ jsx(
                    "img",
                    {
                      src: optimizeImage(
                        (_a = item.media.at(0)) == null ? void 0 : _a.url,
                        400,
                        400
                      ),
                      alt: "Photo of menu item",
                      className: "h-24 w-24 flex-none rounded-md bg-gray-100 object-cover object-center"
                    }
                  ),
                  /* @__PURE__ */ jsxs("div", { className: "flex-auto space-y-1", children: [
                    /* @__PURE__ */ jsx("h3", { className: "text-gray-900", children: /* @__PURE__ */ jsx("span", { children: item.name }) }),
                    /* @__PURE__ */ jsxs("p", { children: [
                      /* @__PURE__ */ jsx("b", { children: "Quantity: " }),
                      item.quantity
                    ] })
                  ] }),
                  /* @__PURE__ */ jsxs("p", { className: "flex-none font-medium text-gray-900", children: [
                    formatNZD(item.price),
                    " NZD"
                  ] })
                ]
              },
              item.id
            );
          })
        }
      ),
      /* @__PURE__ */ jsx("dl", { className: "mt-16 text-sm font-medium", children: /* @__PURE__ */ jsx("dt", { className: "text-gray-900", children: "Addons" }) }),
      /* @__PURE__ */ jsx(
        "ul",
        {
          role: "list",
          className: "mt-6 divide-y divide-gray-200 border-t border-gray-200 text-sm font-medium text-gray-500",
          children: order.addons.map((item) => {
            var _a;
            return /* @__PURE__ */ jsxs(
              "li",
              {
                className: "flex space-x-6 py-6",
                children: [
                  /* @__PURE__ */ jsx(
                    "img",
                    {
                      src: (_a = item.media.at(0)) == null ? void 0 : _a.url,
                      alt: "Photo of menu item",
                      className: "h-24 w-24 flex-none rounded-md bg-gray-100 object-cover object-center"
                    }
                  ),
                  /* @__PURE__ */ jsxs("div", { className: "flex-auto space-y-1", children: [
                    /* @__PURE__ */ jsx("h3", { className: "text-gray-900", children: /* @__PURE__ */ jsx("span", { children: item.name }) }),
                    /* @__PURE__ */ jsxs("p", { children: [
                      /* @__PURE__ */ jsx("b", { children: "Quantity: " }),
                      item.quantity
                    ] })
                  ] }),
                  /* @__PURE__ */ jsxs("p", { className: "flex-none font-medium text-gray-900", children: [
                    formatNZD(item.price),
                    " NZD"
                  ] })
                ]
              },
              item.id
            );
          })
        }
      ),
      /* @__PURE__ */ jsxs("dl", { className: "space-y-6 border-t border-gray-200 pt-6 text-sm font-medium text-gray-500", children: [
        /* @__PURE__ */ jsxs("div", { className: "flex justify-between", children: [
          /* @__PURE__ */ jsx("dt", { children: "Subtotal" }),
          /* @__PURE__ */ jsxs("dd", { className: "text-gray-900", children: [
            formatNZD(order.subtotal),
            " NZD"
          ] })
        ] }),
        /* @__PURE__ */ jsxs("div", { className: "flex justify-between", children: [
          /* @__PURE__ */ jsx("dt", { children: "Shipping" }),
          /* @__PURE__ */ jsxs("dd", { className: "text-gray-900", children: [
            formatNZD(order.delivery_fee),
            " NZD"
          ] })
        ] }),
        /* @__PURE__ */ jsxs("div", { className: "flex justify-between", children: [
          /* @__PURE__ */ jsx("dt", { children: "GST" }),
          /* @__PURE__ */ jsxs("dd", { className: "text-gray-900", children: [
            formatNZD(order.tax),
            " NZD"
          ] })
        ] }),
        /* @__PURE__ */ jsxs("div", { className: "flex items-center justify-between border-t border-gray-200 pt-6 text-gray-900", children: [
          /* @__PURE__ */ jsx("dt", { className: "text-base", children: "Total" }),
          /* @__PURE__ */ jsx("dd", { className: "text-base", children: formatNZD(+order.total) })
        ] })
      ] }),
      /* @__PURE__ */ jsxs("dl", { className: "mt-16 grid grid-cols-2 gap-x-4 text-sm text-gray-600", children: [
        /* @__PURE__ */ jsxs("div", { children: [
          /* @__PURE__ */ jsx("dt", { className: "font-medium text-gray-900", children: "Shipping Address" }),
          /* @__PURE__ */ jsx("dd", { className: "mt-2", children: /* @__PURE__ */ jsx("address", { className: "not-italic", children: order.address.split(",").map((add) => /* @__PURE__ */ jsx(
            "span",
            {
              className: "block",
              children: add
            },
            add
          )) }) })
        ] }),
        /* @__PURE__ */ jsxs("div", { children: [
          /* @__PURE__ */ jsx("dt", { className: "font-medium text-gray-900", children: "Order Date & Time" }),
          /* @__PURE__ */ jsxs("dd", { className: "mt-2", children: [
            /* @__PURE__ */ jsx(
              "time",
              {
                className: "not-italic",
                dateTime: order.date,
                children: /* @__PURE__ */ jsxs("span", { className: "block", children: [
                  /* @__PURE__ */ jsx("b", { children: "Date: " }),
                  dayjs().format("DD/MM/YYYY")
                ] })
              }
            ),
            /* @__PURE__ */ jsx(
              "time",
              {
                className: "not-italic",
                dateTime: order.time,
                children: /* @__PURE__ */ jsxs("span", { className: "block", children: [
                  /* @__PURE__ */ jsx("b", { children: "Time: " }),
                  dayjs().set(
                    "h",
                    getTime(order.time).h
                  ).set(
                    "m",
                    getTime(order.time).m
                  ).format("h:mm A")
                ] })
              }
            )
          ] })
        ] })
      ] }),
      !print && /* @__PURE__ */ jsx("div", { className: "mt-16 border-t border-gray-200 py-6 text-right", children: /* @__PURE__ */ jsxs(
        Link,
        {
          href: route("main.home"),
          className: "text-sm font-medium text-indigo-600 hover:text-indigo-500",
          children: [
            "Continue Ordering",
            /* @__PURE__ */ jsx("span", { "aria-hidden": "true", children: " →" })
          ]
        }
      ) })
    ] }) }) }) }),
    !print && /* @__PURE__ */ jsx(Footer, {})
  ] });
}
export {
  OrderSummaries as default
};
