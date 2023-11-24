import { a as jsxs, j as jsx } from "../ssr.js";
import { CalendarIcon, ClockIcon } from "@heroicons/react/24/outline";
import OrderMenu from "./OrderMenu-34508f9f.js";
import OrderMenu$1 from "./OrderAddons-952c0c49.js";
import { Head, Link } from "@inertiajs/react";
import { O as OrderStatusBadges } from "./OrderList-8dfdfecf.js";
import { A as Authenticated } from "./AuthenticatedLayout-af158b86.js";
import "react/jsx-runtime";
import "react-dom/server";
import "@inertiajs/react/server";
import "@mui/material/InputLabel/index.js";
import "@mui/material/MenuItem/index.js";
import "@mui/material/FormControl/index.js";
import "@mui/material/Select/index.js";
import "@mui/material/Box/index.js";
import "react";
import "./ApplicationLogo-b5012507.js";
import "@headlessui/react";
function OrderDetails({
  auth,
  order
}) {
  return /* @__PURE__ */ jsxs(
    Authenticated,
    {
      user: auth.user,
      header: /* @__PURE__ */ jsxs("h2", { className: "font-semibold text-xl text-gray-800 leading-tight", children: [
        "Order ID: ",
        order.id
      ] }),
      children: [
        /* @__PURE__ */ jsx(Head, { title: "Orders" }),
        /* @__PURE__ */ jsx("div", { children: /* @__PURE__ */ jsx("div", { className: "pb-16 pt-6 sm:pb-24", children: /* @__PURE__ */ jsx("div", { className: "mx-auto mt-8 max-w-4xl px-4 sm:px-6 lg:max-w-4xl lg:px-8", children: /* @__PURE__ */ jsxs("div", { className: "", children: [
          /* @__PURE__ */ jsxs("div", { className: "lg:col-span-5 lg:col-start-8", children: [
            /* @__PURE__ */ jsxs("div", { className: "flex justify-between", children: [
              /* @__PURE__ */ jsxs("h1", { className: "text-xl font-medium text-gray-900", children: [
                "Customer: ",
                order.customer_name
              ] }),
              /* @__PURE__ */ jsxs("p", { className: "text-xl font-medium text-gray-900", children: [
                "$",
                order.total,
                "NZD"
              ] })
            ] }),
            /* @__PURE__ */ jsx("div", { className: "mt-4", children: /* @__PURE__ */ jsxs("div", { className: "flex items-center", children: [
              /* @__PURE__ */ jsx(
                Link,
                {
                  href: route("admin.orders"),
                  className: "rounded bg-indigo-600 px-2 py-1 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600",
                  children: "همه سفارشات"
                }
              ),
              /* @__PURE__ */ jsx(
                "div",
                {
                  "aria-hidden": "true",
                  className: "ml-4 text-sm text-gray-300",
                  children: "·"
                }
              ),
              /* @__PURE__ */ jsx("div", { className: "ml-4 flex", children: /* @__PURE__ */ jsx(
                OrderStatusBadges,
                {
                  status: order.status
                }
              ) })
            ] }) })
          ] }),
          /* @__PURE__ */ jsxs("div", { className: "mt-8 lg:col-span-5", children: [
            /* @__PURE__ */ jsx(OrderMenu, { order }),
            /* @__PURE__ */ jsx("div", { className: "my-10", children: /* @__PURE__ */ jsx("h2", { className: "text-sm font-medium text-gray-900", children: "Addons" }) }),
            /* @__PURE__ */ jsx(OrderMenu$1, { order }),
            /* @__PURE__ */ jsxs("div", { className: "mt-10", children: [
              /* @__PURE__ */ jsx("h2", { className: "text-sm font-medium text-gray-900", children: "Note" }),
              /* @__PURE__ */ jsx("div", { className: "prose prose-sm mt-4 text-gray-500", children: order.note })
            ] }),
            /* @__PURE__ */ jsxs("div", { className: "mt-8 border-t border-gray-200 pt-8", children: [
              /* @__PURE__ */ jsx("h2", { className: "text-sm font-medium text-gray-900", children: "Delievery Details" }),
              /* @__PURE__ */ jsx("div", { className: "prose prose-sm mt-4 text-gray-500", children: /* @__PURE__ */ jsxs("ul", { role: "list", children: [
                /* @__PURE__ */ jsxs("li", { children: [
                  /* @__PURE__ */ jsx("b", { children: "Customer: " }),
                  order.customer_name
                ] }),
                /* @__PURE__ */ jsxs("li", { children: [
                  /* @__PURE__ */ jsx("b", { children: "Phone: " }),
                  order.phone
                ] }),
                /* @__PURE__ */ jsxs("li", { children: [
                  /* @__PURE__ */ jsx("b", { children: "Email: " }),
                  order.email
                ] }),
                /* @__PURE__ */ jsxs("li", { children: [
                  /* @__PURE__ */ jsx("b", { children: "Address: " }),
                  order.address
                ] })
              ] }) })
            ] }),
            /* @__PURE__ */ jsxs("div", { className: "mt-8 border-t border-gray-200 pt-8", children: [
              /* @__PURE__ */ jsx("h2", { className: "text-sm font-medium text-gray-900", children: "Extra Details" }),
              /* @__PURE__ */ jsx("div", { className: "prose prose-sm mt-4 text-gray-500", children: /* @__PURE__ */ jsx("ul", { role: "list", children: /* @__PURE__ */ jsxs("li", { children: [
                /* @__PURE__ */ jsx("b", { children: "Placed on: " }),
                order.created_at
              ] }) }) })
            ] }),
            /* @__PURE__ */ jsx(
              "section",
              {
                "aria-labelledby": "policies-heading",
                className: "mt-10",
                children: /* @__PURE__ */ jsxs("dl", { className: "grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2", children: [
                  /* @__PURE__ */ jsxs("div", { className: "rounded-lg border border-gray-200 bg-gray-50 p-6 text-center", children: [
                    /* @__PURE__ */ jsxs("dt", { children: [
                      /* @__PURE__ */ jsx(
                        CalendarIcon,
                        {
                          className: "mx-auto h-6 w-6 flex-shrink-0 text-gray-400",
                          "aria-hidden": "true"
                        }
                      ),
                      /* @__PURE__ */ jsx("span", { className: "mt-4 text-sm font-medium text-gray-900", children: "Date" })
                    ] }),
                    /* @__PURE__ */ jsx("dd", { className: "mt-1 text-sm text-gray-500", children: order.date })
                  ] }),
                  /* @__PURE__ */ jsxs("div", { className: "rounded-lg border border-gray-200 bg-gray-50 p-6 text-center", children: [
                    /* @__PURE__ */ jsxs("dt", { children: [
                      /* @__PURE__ */ jsx(
                        ClockIcon,
                        {
                          className: "mx-auto h-6 w-6 flex-shrink-0 text-gray-400",
                          "aria-hidden": "true"
                        }
                      ),
                      /* @__PURE__ */ jsx("span", { className: "mt-4 text-sm font-medium text-gray-900", children: "Time" })
                    ] }),
                    /* @__PURE__ */ jsx("dd", { className: "mt-1 text-sm text-gray-500", children: order.time })
                  ] })
                ] })
              }
            )
          ] })
        ] }) }) }) })
      ]
    }
  );
}
export {
  OrderDetails as default
};
