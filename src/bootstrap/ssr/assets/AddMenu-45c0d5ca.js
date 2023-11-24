import { a as jsxs, j as jsx } from "../ssr.js";
import { useState, useRef } from "react";
import { useForm, Head } from "@inertiajs/react";
import { A as Authenticated } from "./AuthenticatedLayout-af158b86.js";
import { UserCircleIcon } from "@heroicons/react/24/solid";
import axios from "axios";
import Menus from "./Menus-004dbd8e.js";
import "react/jsx-runtime";
import "react-dom/server";
import "@inertiajs/react/server";
import "./ApplicationLogo-b5012507.js";
import "@headlessui/react";
function AddMenu({
  auth,
  dishes,
  menus
}) {
  const [loading, setLoading] = useState(false);
  const [message, setMessage] = useState("");
  const fileRef = useRef(null);
  const [photoPreviews, setPhotoPreviews] = useState([]);
  const { data, setData, reset, errors, setError, clearErrors } = useForm({
    name: "",
    price: "",
    description: "",
    dishes: [],
    options: [],
    image: ""
  });
  const onAddMenuSubmit = async (e) => {
    e.preventDefault();
    if (photoPreviews.length == 0) {
      setError("image", "Please upload a photo");
      return;
    }
    try {
      clearErrors();
      setLoading(true);
      const result = await axios.post("/api/menu", data);
      const menuId = result.data.id;
      await uploadphotos(menuId);
      reset();
      setPhotoPreviews([]);
      setMessage("Menu added successfully");
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
      return axios.post("/api/menu/media", form);
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
      header: /* @__PURE__ */ jsx("h2", { className: "font-semibold text-xl text-gray-800 leading-tight", children: "Add a Menu" }),
      children: [
        /* @__PURE__ */ jsx(Head, { title: "add Menu" }),
        /* @__PURE__ */ jsxs("div", { className: "mx-auto my-6 max-w-4xl", children: [
          /* @__PURE__ */ jsx(Menus, { menus }),
          /* @__PURE__ */ jsxs("form", { onSubmit: onAddMenuSubmit, children: [
            /* @__PURE__ */ jsxs("div", { className: "space-y-12", children: [
              /* @__PURE__ */ jsxs("div", { className: "border-b border-gray-900/10 pb-12", children: [
                message.length > 0 && /* @__PURE__ */ jsx("p", { className: "mt-1 text-md leading-6 text-green-600", children: message }),
                /* @__PURE__ */ jsxs("div", { className: "mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6", children: [
                  /* @__PURE__ */ jsxs("div", { className: "sm:col-span-4", children: [
                    /* @__PURE__ */ jsx(
                      "label",
                      {
                        htmlFor: "name",
                        className: "block text-sm font-medium leading-6 text-gray-900",
                        children: "Menu Name"
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
                          placeholder: "Basic Menu"
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
                    /* @__PURE__ */ jsx("p", { className: "mt-3 text-sm leading-6 text-gray-600", children: "Write a few sentences about the menu." })
                  ] }),
                  /* @__PURE__ */ jsxs("div", { className: "col-span-full", children: [
                    /* @__PURE__ */ jsx(
                      "label",
                      {
                        htmlFor: "photo",
                        className: "block text-sm font-medium leading-6 text-gray-900",
                        children: "Menu Photo"
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
              /* @__PURE__ */ jsx("div", { className: "border-b border-gray-900/10 pb-12", children: /* @__PURE__ */ jsxs("div", { className: "mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6", children: [
                /* @__PURE__ */ jsxs("div", { className: "sm:col-span-3", children: [
                  /* @__PURE__ */ jsx(
                    "label",
                    {
                      htmlFor: "dishes",
                      className: "block text-sm font-medium leading-6 text-gray-900",
                      children: "Dishes"
                    }
                  ),
                  /* @__PURE__ */ jsx("div", { className: "mt-2", children: /* @__PURE__ */ jsx(
                    "select",
                    {
                      value: data.dishes,
                      onChange: (e) => setData(
                        "dishes",
                        Array.from(
                          e.target.selectedOptions,
                          (option) => option.value
                        )
                      ),
                      id: "dishes",
                      name: "dishes",
                      multiple: true,
                      className: "block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6",
                      children: dishes.map(({ name, id }) => /* @__PURE__ */ jsx("option", { value: id, children: name }, id))
                    }
                  ) }),
                  errors.dishes && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1", children: errors.dishes })
                ] }),
                /* @__PURE__ */ jsxs("div", { className: "sm:col-span-3", children: [
                  /* @__PURE__ */ jsx(
                    "label",
                    {
                      htmlFor: "options",
                      className: "block text-sm font-medium leading-6 text-gray-900",
                      children: "Options"
                    }
                  ),
                  /* @__PURE__ */ jsx("div", { className: "mt-2", children: /* @__PURE__ */ jsx(
                    "select",
                    {
                      value: data.options,
                      onChange: (e) => setData(
                        "options",
                        Array.from(
                          e.target.selectedOptions,
                          (option) => option.value
                        )
                      ),
                      id: "options",
                      name: "options",
                      multiple: true,
                      className: "block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6",
                      children: dishes.map(({ name, id }) => /* @__PURE__ */ jsx("option", { value: id, children: name }, id))
                    }
                  ) }),
                  errors.options && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1", children: errors.options })
                ] })
              ] }) })
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
  AddMenu as default
};
