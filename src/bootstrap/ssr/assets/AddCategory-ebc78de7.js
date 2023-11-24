import { a as jsxs, j as jsx } from "../ssr.js";
import { useState } from "react";
import { useForm, Head } from "@inertiajs/react";
import { A as Authenticated } from "./AuthenticatedLayout-af158b86.js";
import axios from "axios";
import Categories from "./Categories-35c364d0.js";
import "react/jsx-runtime";
import "react-dom/server";
import "@inertiajs/react/server";
import "./ApplicationLogo-b5012507.js";
import "@headlessui/react";
function AddCategory({
  auth,
  categories
}) {
  const [loading, setLoading] = useState(false);
  const [message, setMessage] = useState("");
  const { data, setData, reset, errors, setError, clearErrors } = useForm({
    name: "",
    description: ""
  });
  const onAddCategorySubmit = async (e) => {
    e.preventDefault();
    try {
      clearErrors();
      setLoading(true);
      await axios.post("/api/category", data);
      reset();
      setMessage("Category added successfully");
    } catch (err) {
      if (err.response.data.errors) {
        const errors2 = err.response.data.errors;
        const keys = Object.keys(errors2);
        keys.forEach((key) => {
          setError(key, errors2[key][0]);
        });
      }
    } finally {
      setLoading(false);
    }
  };
  return /* @__PURE__ */ jsxs(
    Authenticated,
    {
      user: auth.user,
      header: /* @__PURE__ */ jsx("h2", { className: "font-semibold text-xl text-gray-800 leading-tight", children: "Add a Category" }),
      children: [
        /* @__PURE__ */ jsx(Head, { title: "Add Category" }),
        /* @__PURE__ */ jsxs("div", { className: "mx-auto my-6 sm:max-w-4xl px-4", children: [
          /* @__PURE__ */ jsx(Categories, { categories }),
          /* @__PURE__ */ jsxs("form", { onSubmit: onAddCategorySubmit, children: [
            /* @__PURE__ */ jsx("div", { className: "space-y-12", children: /* @__PURE__ */ jsxs("div", { className: "border-b border-gray-900/10 pb-12", children: [
              message.length > 0 && /* @__PURE__ */ jsx("p", { className: "mt-1 text-md leading-6 text-green-600", children: message }),
              /* @__PURE__ */ jsxs("div", { className: "mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6", children: [
                /* @__PURE__ */ jsxs("div", { className: "sm:col-span-4", children: [
                  /* @__PURE__ */ jsx(
                    "label",
                    {
                      htmlFor: "name",
                      className: "block text-sm font-medium leading-6 text-gray-900",
                      children: "Category Name"
                    }
                  ),
                  /* @__PURE__ */ jsxs("div", { className: "mt-2", children: [
                    /* @__PURE__ */ jsx("div", { className: "flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md", children: /* @__PURE__ */ jsx(
                      "input",
                      {
                        value: data.name,
                        type: "text",
                        name: "name",
                        id: "name",
                        onChange: (e) => setData(
                          "name",
                          e.target.value
                        ),
                        className: "block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6",
                        placeholder: "Mantoo"
                      }
                    ) }),
                    errors.name && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1", children: errors.name })
                  ] })
                ] }),
                /* @__PURE__ */ jsxs("div", { className: "col-span-full", children: [
                  /* @__PURE__ */ jsx(
                    "label",
                    {
                      htmlFor: "description",
                      className: "block text-sm font-medium leading-6 text-gray-900",
                      children: "Description"
                    }
                  ),
                  /* @__PURE__ */ jsx("div", { className: "mt-2", children: /* @__PURE__ */ jsx(
                    "textarea",
                    {
                      value: data.description,
                      id: "description",
                      name: "description",
                      rows: 3,
                      onChange: (e) => setData(
                        "description",
                        e.target.value
                      ),
                      className: "block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    }
                  ) }),
                  errors.description && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1", children: errors.description }),
                  /* @__PURE__ */ jsx("p", { className: "mt-3 text-sm leading-6 text-gray-600", children: "Write a few sentences about the category." })
                ] })
              ] })
            ] }) }),
            /* @__PURE__ */ jsxs("div", { className: "mt-6 flex items-center justify-end gap-x-6", children: [
              /* @__PURE__ */ jsx(
                "button",
                {
                  type: "button",
                  className: "text-sm font-semibold leading-6 text-gray-900",
                  children: "Cancel"
                }
              ),
              /* @__PURE__ */ jsx(
                "button",
                {
                  disabled: loading,
                  type: "submit",
                  className: "rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600",
                  children: loading ? "Submitting" : "Save"
                }
              )
            ] })
          ] })
        ] })
      ]
    }
  );
}
export {
  AddCategory as default
};
