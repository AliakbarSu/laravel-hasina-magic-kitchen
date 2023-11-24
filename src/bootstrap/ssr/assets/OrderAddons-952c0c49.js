import { j as jsx, a as jsxs } from "../ssr.js";
import "react/jsx-runtime";
import "react-dom/server";
import "@inertiajs/react";
import "@inertiajs/react/server";
function OrderMenu({ order }) {
  return /* @__PURE__ */ jsx("div", { className: "bg-gray-900", children: /* @__PURE__ */ jsx("div", { className: "mx-auto max-w-7xl", children: /* @__PURE__ */ jsx("div", { className: "bg-gray-900 py-10", children: /* @__PURE__ */ jsx("div", { className: "px-4 sm:px-6 lg:px-8", children: /* @__PURE__ */ jsx("div", { className: "mt-8 flow-root", children: /* @__PURE__ */ jsx("div", { className: "-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8", children: /* @__PURE__ */ jsx("div", { className: "inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8", children: /* @__PURE__ */ jsxs("table", { className: "min-w-full divide-y divide-gray-700", children: [
    /* @__PURE__ */ jsx("thead", { children: /* @__PURE__ */ jsxs("tr", { children: [
      /* @__PURE__ */ jsx(
        "th",
        {
          scope: "col",
          className: "py-3.5 pl-4 pr-3 text-left text-xl font-semibold text-white sm:pl-0",
          children: "غذا"
        }
      ),
      /* @__PURE__ */ jsx(
        "th",
        {
          scope: "col",
          className: "px-3 py-3.5 text-left text-xl font-semibold text-white",
          children: "جمع"
        }
      )
    ] }) }),
    /* @__PURE__ */ jsx("tbody", { className: "divide-y divide-gray-800", children: order.addons.map((ord) => /* @__PURE__ */ jsxs("tr", { children: [
      /* @__PURE__ */ jsx("td", { className: "whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-0", children: ord.name }),
      /* @__PURE__ */ jsx("td", { className: "whitespace-nowrap px-3 py-4 text-sm text-gray-300", children: ord.quantity })
    ] }, ord.id)) })
  ] }) }) }) }) }) }) }) });
}
export {
  OrderMenu as default
};
