import { a as jsxs, j as jsx } from "../ssr.js";
import { useState, useRef } from "react";
import { useForm, Head } from "@inertiajs/react";
import { A as Authenticated } from "./AuthenticatedLayout-af158b86.js";
import { UserCircleIcon } from "@heroicons/react/24/solid";
import axios from "axios";
import Dishes from "./Dishes-2242f562.js";
import "react/jsx-runtime";
import "react-dom/server";
import "@inertiajs/react/server";
import "./ApplicationLogo-b5012507.js";
import "@headlessui/react";
function AddDish({
  auth,
  categories,
  dishes
}) {
  var _a;
  const [loading, setLoading] = useState(false);
  const [message, setMessage] = useState("");
  const fileRef = useRef(null);
  const [photoPreviews, setPhotoPreviews] = useState([]);
  const { data, setData, reset, errors, setError, clearErrors } = useForm({
    name: "",
    price: "",
    description: "",
    category: (_a = categories.at(0)) == null ? void 0 : _a.id,
    image: ""
  });
  const onAddDishSubmit = async (e) => {
    e.preventDefault();
    if (photoPreviews.length == 0) {
      setError("image", "Please upload a photo");
      return;
    }
    try {
      clearErrors();
      setLoading(true);
      const result = await axios.post("/api/dish", data);
      const dishId = result.data.id;
      await uploadphotos(dishId);
      reset();
      setPhotoPreviews([]);
      setMessage("Dish added successfully");
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
  const uploadphotos = (id) => {
    const form = new FormData();
    form.append("id", id);
    if ((fileRef == null ? void 0 : fileRef.current) && (fileRef == null ? void 0 : fileRef.current).files.length > 0) {
      form.append(
        "image",
        (fileRef == null ? void 0 : fileRef.current).files[0]
      );
      return axios.post("/api/dish/media", form);
    } else {
      return Promise.resolve();
    }
  };
  const setPreview = (e) => {
    const files = e.target.files;
    for (let i = 0; i < files.length; i++) {
      setPhotoPreviews(
        (prevs) => [...prevs, URL.createObjectURL(files[i])]
      );
    }
  };
  return /* @__PURE__ */ jsxs(
    Authenticated,
    {
      user: auth.user,
      header: /* @__PURE__ */ jsx("h2", { className: "font-semibold text-xl text-gray-800 leading-tight", children: "Add a Dish" }),
      children: [
        /* @__PURE__ */ jsx(Head, { title: "Orders" }),
        /* @__PURE__ */ jsxs("div", { className: "mx-auto my-6 max-w-4xl", children: [
          /* @__PURE__ */ jsx(Dishes, { dishes }),
          /* @__PURE__ */ jsxs("form", { onSubmit: onAddDishSubmit, children: [
            /* @__PURE__ */ jsxs("div", { className: "space-y-12", children: [
              /* @__PURE__ */ jsxs("div", { className: "border-b border-gray-900/10 pb-12", children: [
                message.length > 0 && /* @__PURE__ */ jsx("p", { className: "mt-1 text-md leading-6 text-green-600", children: message }),
                /* @__PURE__ */ jsxs("div", { className: "mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6", children: [
                  /* @__PURE__ */ jsxs("div", { className: "sm:col-span-4", children: [
                    /* @__PURE__ */ jsx(
                      "label",
                      {
                        htmlFor: "username",
                        className: "block text-sm font-medium leading-6 text-gray-900",
                        children: "Dish Name"
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
                  /* @__PURE__ */ jsxs("div", { className: "sm:col-span-4", children: [
                    /* @__PURE__ */ jsx(
                      "label",
                      {
                        htmlFor: "price",
                        className: "block text-sm font-medium leading-6 text-gray-900",
                        children: "Price"
                      }
                    ),
                    /* @__PURE__ */ jsxs("div", { className: "mt-2", children: [
                      /* @__PURE__ */ jsx("div", { className: "flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md", children: /* @__PURE__ */ jsx(
                        "input",
                        {
                          value: data.price,
                          type: "number",
                          name: "price",
                          id: "price",
                          onChange: (e) => setData(
                            "price",
                            e.target.value
                          ),
                          className: "block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6",
                          placeholder: "24.0"
                        }
                      ) }),
                      errors.price && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1", children: errors.price })
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
                    /* @__PURE__ */ jsx("p", { className: "mt-3 text-sm leading-6 text-gray-600", children: "Write a few sentences about the dish." })
                  ] }),
                  /* @__PURE__ */ jsxs("div", { className: "col-span-full", children: [
                    /* @__PURE__ */ jsx(
                      "label",
                      {
                        htmlFor: "photo",
                        className: "block text-sm font-medium leading-6 text-gray-900",
                        children: "Dish Photo"
                      }
                    ),
                    /* @__PURE__ */ jsxs("div", { className: "mt-2 flex items-center gap-x-3", children: [
                      photoPreviews.length == 0 && /* @__PURE__ */ jsx(
                        UserCircleIcon,
                        {
                          className: "h-12 w-12 text-gray-300",
                          "aria-hidden": "true"
                        }
                      ),
                      /* @__PURE__ */ jsx("div", { children: photoPreviews.map((preview, i) => /* @__PURE__ */ jsx(
                        "img",
                        {
                          className: "h-10 w-10 rounded-full",
                          src: preview,
                          alt: ""
                        },
                        i
                      )) }),
                      /* @__PURE__ */ jsx(
                        "input",
                        {
                          onChange: setPreview,
                          accept: "image/jpg,png",
                          multiple: true,
                          ref: fileRef,
                          type: "file",
                          id: "photo",
                          name: "photo",
                          hidden: true
                        }
                      ),
                      /* @__PURE__ */ jsx(
                        "button",
                        {
                          onClick: () => (fileRef == null ? void 0 : fileRef.current).click(),
                          type: "button",
                          className: "rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50",
                          children: "Change"
                        }
                      )
                    ] }),
                    errors.image && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1", children: errors.image })
                  ] })
                ] })
              ] }),
              /* @__PURE__ */ jsx("div", { className: "border-b border-gray-900/10 pb-12", children: /* @__PURE__ */ jsx("div", { className: "mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6", children: /* @__PURE__ */ jsxs("div", { className: "sm:col-span-3", children: [
                /* @__PURE__ */ jsx(
                  "label",
                  {
                    htmlFor: "category",
                    className: "block text-sm font-medium leading-6 text-gray-900",
                    children: "Category"
                  }
                ),
                /* @__PURE__ */ jsx("div", { className: "mt-2", children: /* @__PURE__ */ jsx(
                  "select",
                  {
                    value: data.category,
                    onChange: (e) => setData(
                      "category",
                      e.target.value
                    ),
                    id: "category",
                    name: "category",
                    className: "block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6",
                    children: categories.map(({ name, id }) => /* @__PURE__ */ jsx("option", { value: id, children: name }, id))
                  }
                ) }),
                errors.category && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1", children: errors.category })
              ] }) }) })
            ] }),
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
  AddDish as default
};
