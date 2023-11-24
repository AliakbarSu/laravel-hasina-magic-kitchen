import { j as jsx, a as jsxs } from "../ssr.js";
import axios from "axios";
import { useState } from "react";
import "react/jsx-runtime";
import "react-dom/server";
import "@inertiajs/react";
import "@inertiajs/react/server";
function Categories({ categories }) {
  const [allCategories, setAllCategories] = useState(categories);
  const onDeleteCategory = async (id) => {
    axios.delete(`/api/category/${id}`).catch((err) => {
      console.log(err.response.data);
    }).then(() => {
      setAllCategories(
        allCategories.filter((category) => category.id !== id)
      );
      alert("Category deleted successfully");
    });
  };
  return /* @__PURE__ */ jsx("div", { children: /* @__PURE__ */ jsx("div", { className: "mt-8 flow-root", children: /* @__PURE__ */ jsx("div", { className: "-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8", children: /* @__PURE__ */ jsx("div", { className: "inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8", children: /* @__PURE__ */ jsx("div", { className: "overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg", children: /* @__PURE__ */ jsxs("table", { className: "min-w-full divide-y divide-gray-300", children: [
    /* @__PURE__ */ jsx("thead", { className: "bg-gray-50", children: /* @__PURE__ */ jsxs("tr", { children: [
      /* @__PURE__ */ jsx(
        "th",
        {
          scope: "col",
          className: "px-3 py-3.5 text-left text-sm font-semibold text-gray-900",
          children: "Name"
        }
      ),
      /* @__PURE__ */ jsx(
        "th",
        {
          scope: "col",
          className: "px-3 py-3.5 text-left text-sm font-semibold text-gray-900",
          children: "Description"
        }
      ),
      /* @__PURE__ */ jsx(
        "th",
        {
          scope: "col",
          className: "relative py-3.5 pl-3 pr-4 sm:pr-6",
          children: /* @__PURE__ */ jsx("span", { className: "sr-only", children: "Delete" })
        }
      )
    ] }) }),
    /* @__PURE__ */ jsx("tbody", { className: "divide-y divide-gray-200 bg-white", children: allCategories.map((category) => /* @__PURE__ */ jsxs("tr", { children: [
      /* @__PURE__ */ jsx("td", { className: "whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6", children: category.name }),
      /* @__PURE__ */ jsx("td", { className: "whitespace-nowrap px-3 py-4 text-sm text-gray-500", children: category.description }),
      /* @__PURE__ */ jsx("td", { className: "relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6", children: /* @__PURE__ */ jsx(
        "span",
        {
          onClick: () => onDeleteCategory(
            category.id
          ),
          className: "text-indigo-600 hover:text-indigo-900",
          children: "Delete"
        }
      ) })
    ] }, category.id)) })
  ] }) }) }) }) }) });
}
export {
  Categories as default
};
