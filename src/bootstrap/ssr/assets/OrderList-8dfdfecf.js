import { a as jsxs, j as jsx } from "../ssr.js";
import { useForm, Head, Link } from "@inertiajs/react";
import { A as Authenticated } from "./AuthenticatedLayout-af158b86.js";
import InputLabel from "@mui/material/InputLabel/index.js";
import MenuItem from "@mui/material/MenuItem/index.js";
import FormControl from "@mui/material/FormControl/index.js";
import Select from "@mui/material/Select/index.js";
import Box from "@mui/material/Box/index.js";
var OrderStatus = /* @__PURE__ */ ((OrderStatus2) => {
  OrderStatus2["Created"] = "created";
  OrderStatus2["Confirmed"] = "confirmed";
  OrderStatus2["Make"] = "make";
  OrderStatus2["Completed"] = "completed";
  OrderStatus2["Canceled"] = "canceled";
  return OrderStatus2;
})(OrderStatus || {});
function Orders({
  auth,
  orders
}) {
  const { errors } = useForm({
    status: "pending",
    order_id: ""
  });
  return /* @__PURE__ */ jsxs(
    Authenticated,
    {
      user: auth.user,
      header: /* @__PURE__ */ jsx("h2", { className: "font-semibold text-xl text-gray-800 leading-tight", children: "Orders" }),
      children: [
        /* @__PURE__ */ jsx(Head, { title: "Orders" }),
        errors.order_id ? /* @__PURE__ */ jsx("div", { children: errors.order_id }) : null,
        /* @__PURE__ */ jsx("div", { className: "py-12", children: /* @__PURE__ */ jsx("div", { className: "max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6", children: /* @__PURE__ */ jsx(OrderList, { orders }) }) })
      ]
    }
  );
}
const Orders$1 = /* @__PURE__ */ Object.freeze(/* @__PURE__ */ Object.defineProperty({
  __proto__: null,
  OrderStatus,
  default: Orders
}, Symbol.toStringTag, { value: "Module" }));
const availableStatus = [
  { id: OrderStatus.Confirmed, title: "Confirm" },
  { id: OrderStatus.Make, title: "Make" },
  { id: OrderStatus.Completed, title: "Complete" },
  { id: OrderStatus.Canceled, title: "Cancel" }
];
function OrderStatusActions({
  order
}) {
  const { patch, setData, data } = useForm({
    status: order.status,
    order_id: order.id
  });
  const onSubmitHandler = () => {
    confirm(
      `Are you sure you want to change the status of this order to ${data.status}?`
    );
    patch(route("admin.orders.update.status"));
  };
  const handleChange = (event) => {
    setData("status", event.target.value);
  };
  return /* @__PURE__ */ jsxs("div", { children: [
    /* @__PURE__ */ jsx(Box, { sx: { maxWidth: 150, mt: 3 }, children: /* @__PURE__ */ jsxs(FormControl, { fullWidth: true, children: [
      /* @__PURE__ */ jsx(InputLabel, { id: "order-status", children: "Status" }),
      /* @__PURE__ */ jsx(
        Select,
        {
          labelId: "order-status",
          id: "order-status",
          value: data.status,
          label: "Status",
          onChange: handleChange,
          children: availableStatus.map((orderStatus) => /* @__PURE__ */ jsx(
            MenuItem,
            {
              value: orderStatus.id,
              children: orderStatus.title
            },
            orderStatus.id
          ))
        }
      )
    ] }) }),
    /* @__PURE__ */ jsx("div", { className: "py-3", children: /* @__PURE__ */ jsx(
      "button",
      {
        onClick: onSubmitHandler,
        type: "button",
        className: "rounded bg-indigo-600 px-2 py-1 text-md font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600",
        children: "Update"
      }
    ) })
  ] });
}
const OrderStatusActions$1 = /* @__PURE__ */ Object.freeze(/* @__PURE__ */ Object.defineProperty({
  __proto__: null,
  default: OrderStatusActions
}, Symbol.toStringTag, { value: "Module" }));
function OrderStatusBadges({ status }) {
  if (status === OrderStatus.Created) {
    return /* @__PURE__ */ jsx("span", { className: "inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-orange-300 ring-1 ring-inset ring-gray-500/10", children: "Created" });
  } else if (status === OrderStatus.Confirmed) {
    return /* @__PURE__ */ jsx("span", { className: "inline-flex items-center rounded-md bg-yellow-400 px-2 py-1 text-xs font-medium text-white ring-1 ring-inset ring-gray-500/10", children: "Confirmed" });
  } else if (status === OrderStatus.Make) {
    return /* @__PURE__ */ jsx("span", { className: "inline-flex items-center rounded-md bg-orange-300 px-2 py-1 text-xs font-medium text-white ring-1 ring-inset ring-gray-500/10", children: "Make" });
  } else if (status === OrderStatus.Completed) {
    return /* @__PURE__ */ jsx("span", { className: "inline-flex items-center rounded-md bg-green-600 px-2 py-1 text-xs font-medium text-white ring-1 ring-inset ring-gray-500/10", children: "Completed" });
  } else if (status === OrderStatus.Canceled) {
    return /* @__PURE__ */ jsx("span", { className: "inline-flex items-center rounded-md bg-red-600 px-2 py-1 text-xs font-medium text-white ring-1 ring-inset ring-gray-500/10", children: "Canceled" });
  } else {
    return /* @__PURE__ */ jsx("span", { className: "inline-flex items-center rounded-md bg-red-600 px-2 py-1 text-xs font-medium text-white ring-1 ring-inset ring-gray-500/10", children: "Unknown" });
  }
}
const OrderStatusBadges$1 = /* @__PURE__ */ Object.freeze(/* @__PURE__ */ Object.defineProperty({
  __proto__: null,
  default: OrderStatusBadges
}, Symbol.toStringTag, { value: "Module" }));
function OrderList({ orders }) {
  return /* @__PURE__ */ jsxs("main", { className: "mx-auto px-4 py-16 sm:px-6 sm:pb-32 sm:pt-24 lg:px-8", children: [
    /* @__PURE__ */ jsxs("div", { className: "mx-auto max-w-2xl", children: [
      /* @__PURE__ */ jsx("h1", { className: "text-3xl font-bold tracking-tight text-gray-900", children: "Your Orders" }),
      /* @__PURE__ */ jsx("p", { className: "mt-2 text-sm text-gray-500", children: "Check the status of recent orders, manage returns, and discover similar products." })
    ] }),
    /* @__PURE__ */ jsx("div", { className: "mx-auto max-w-2xl mt-12 space-y-16 sm:mt-16", children: orders.map((order) => /* @__PURE__ */ jsxs(
      "section",
      {
        "aria-labelledby": `${order.id}-heading`,
        children: [
          /* @__PURE__ */ jsxs("div", { className: "space-y-1 md:flex md:items-baseline md:space-x-4 md:space-y-0", children: [
            /* @__PURE__ */ jsxs(
              "h2",
              {
                id: `${order.id}-heading`,
                className: "text-lg font-medium text-gray-900 md:flex-shrink-0 w-2/4",
                children: [
                  "Order for ",
                  /* @__PURE__ */ jsx("b", { children: order.customer_name })
                ]
              }
            ),
            /* @__PURE__ */ jsx("div", { className: "space-y-5 sm:flex sm:items-baseline sm:justify-between sm:space-y-0 md:min-w-0 md:flex-1", children: /* @__PURE__ */ jsxs("div", { className: "flex text-sm font-medium", children: [
              /* @__PURE__ */ jsx(
                OrderStatusBadges,
                {
                  status: order.status
                }
              ),
              /* @__PURE__ */ jsx("div", { className: "ml-4 border-l border-gray-200 pl-4 sm:ml-6 sm:pl-6", children: /* @__PURE__ */ jsx(
                Link,
                {
                  href: route("admin.order_details", {
                    id: order.id
                  }),
                  className: "text-indigo-600 hover:text-indigo-500 text-xl",
                  children: "دیدن سفارش"
                }
              ) })
            ] }) })
          ] }),
          /* @__PURE__ */ jsx(
            OrderStatusActions,
            {
              order,
              onSelect: () => null
            }
          )
        ]
      },
      order.id
    )) })
  ] });
}
const OrderList$1 = /* @__PURE__ */ Object.freeze(/* @__PURE__ */ Object.defineProperty({
  __proto__: null,
  default: OrderList
}, Symbol.toStringTag, { value: "Module" }));
export {
  OrderStatusBadges as O,
  Orders$1 as a,
  OrderStatusActions$1 as b,
  OrderStatusBadges$1 as c,
  OrderList$1 as d
};
