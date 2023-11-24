import { j as jsx, F as Fragment, a as jsxs } from "../ssr.js";
import { useForm, Head } from "@inertiajs/react";
import { Fragment as Fragment$1, useState } from "react";
import { E as Example, F as Footer } from "./Footer-5adae4d0.js";
import { Transition } from "@headlessui/react";
import { CheckCircleIcon } from "@heroicons/react/24/outline";
import { XMarkIcon } from "@heroicons/react/20/solid";
import { z } from "zod";
import { P as PhoneNumberInput } from "./PhoneNumberInput-99827722.js";
import "react/jsx-runtime";
import "react-dom/server";
import "@inertiajs/react/server";
import "react-redux";
function MessageSent({
  open,
  setOpen
}) {
  return /* @__PURE__ */ jsx(Fragment, { children: /* @__PURE__ */ jsx(
    "div",
    {
      "aria-live": "assertive",
      className: "pointer-events-none fixed inset-0 flex items-end px-4 py-6 sm:items-start sm:p-6",
      children: /* @__PURE__ */ jsx("div", { className: "flex w-full flex-col items-center space-y-4 sm:items-end", children: /* @__PURE__ */ jsx(
        Transition,
        {
          show: open,
          as: Fragment$1,
          enter: "transform ease-out duration-300 transition",
          enterFrom: "translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2",
          enterTo: "translate-y-0 opacity-100 sm:translate-x-0",
          leave: "transition ease-in duration-100",
          leaveFrom: "opacity-100",
          leaveTo: "opacity-0",
          children: /* @__PURE__ */ jsx("div", { className: "pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5", children: /* @__PURE__ */ jsx("div", { className: "p-4", children: /* @__PURE__ */ jsxs("div", { className: "flex items-start", children: [
            /* @__PURE__ */ jsx("div", { className: "flex-shrink-0", children: /* @__PURE__ */ jsx(
              CheckCircleIcon,
              {
                className: "h-6 w-6 text-green-400",
                "aria-hidden": "true"
              }
            ) }),
            /* @__PURE__ */ jsxs("div", { className: "ml-3 w-0 flex-1 pt-0.5", children: [
              /* @__PURE__ */ jsx("p", { className: "text-sm font-medium text-gray-900", children: "Successfully sent!" }),
              /* @__PURE__ */ jsx("p", { className: "mt-1 text-sm text-gray-500", children: "Your message sent successfully!" })
            ] }),
            /* @__PURE__ */ jsx("div", { className: "ml-4 flex flex-shrink-0", children: /* @__PURE__ */ jsxs(
              "button",
              {
                type: "button",
                className: "inline-flex rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2",
                onClick: () => {
                  setOpen(false);
                },
                children: [
                  /* @__PURE__ */ jsx("span", { className: "sr-only", children: "Close" }),
                  /* @__PURE__ */ jsx(
                    XMarkIcon,
                    {
                      className: "h-5 w-5",
                      "aria-hidden": "true"
                    }
                  )
                ]
              }
            ) })
          ] }) }) })
        }
      ) })
    }
  ) });
}
function Contact() {
  const [messageSent, setMessageSent] = useState(false);
  const { post, data, setData, setError, errors, clearErrors } = useForm({
    first_name: "",
    last_name: "",
    company: "",
    email: "",
    number: 0,
    message: "",
    terms: true
  });
  const formSchema = z.object({
    first_name: z.string().min(2).max(20),
    last_name: z.string().min(2).max(20),
    company: z.string().max(40).optional(),
    email: z.string().email(),
    number: z.string().min(6).max(14),
    message: z.string().min(20).max(900),
    terms: z.boolean()
  });
  const errorMessages = {
    first_name: "First name is required and should be 2 to 20 characters long.",
    last_name: "Last name is required and should be 2 to 20 characters long.",
    company: "Company name should be valid and not exceed 40 characters",
    email: "Email is required and must be valid.",
    number: "Mobile number is required and must be valid.",
    message: "Message should be between 20 to 900 characters",
    terms: ""
  };
  const onSubmitHandler = (e) => {
    e.preventDefault();
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
    post("api/contact", {
      onSuccess: () => {
        setMessageSent(true);
      }
    });
  };
  return /* @__PURE__ */ jsxs("div", { children: [
    /* @__PURE__ */ jsx(Head, { title: "Contact" }),
    /* @__PURE__ */ jsx(MessageSent, { open: messageSent, setOpen: setMessageSent }),
    /* @__PURE__ */ jsx(Example, {}),
    /* @__PURE__ */ jsxs("div", { className: "bg-white px-6 py-24 sm:py-32 lg:px-8", children: [
      /* @__PURE__ */ jsx(Head, { title: "Contact" }),
      /* @__PURE__ */ jsx(
        "div",
        {
          className: "absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]",
          "aria-hidden": "true",
          children: /* @__PURE__ */ jsx(
            "div",
            {
              className: "relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]",
              style: {
                clipPath: "polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
              }
            }
          )
        }
      ),
      /* @__PURE__ */ jsxs("div", { className: "mx-auto max-w-2xl text-center", children: [
        /* @__PURE__ */ jsx("h2", { className: "text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl", children: "Contact us" }),
        /* @__PURE__ */ jsx("p", { className: "mt-2 text-lg leading-8 text-gray-600", children: "Please use the form below to contact us. We will get back to you as soon as possible." })
      ] }),
      /* @__PURE__ */ jsxs(
        "form",
        {
          onSubmit: onSubmitHandler,
          action: "#",
          method: "POST",
          className: "mx-auto mt-16 max-w-xl sm:mt-20",
          children: [
            /* @__PURE__ */ jsxs("div", { className: "grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2", children: [
              /* @__PURE__ */ jsxs("div", { children: [
                /* @__PURE__ */ jsx(
                  "label",
                  {
                    htmlFor: "first-name",
                    className: "block text-sm font-semibold leading-6 text-gray-900",
                    children: "First name"
                  }
                ),
                /* @__PURE__ */ jsx("div", { className: "mt-2.5", children: /* @__PURE__ */ jsx(
                  "input",
                  {
                    value: data.first_name,
                    type: "text",
                    name: "first-name",
                    id: "first-name",
                    autoComplete: "given-name",
                    onChange: (e) => setData("first_name", e.target.value),
                    className: "block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  }
                ) }),
                errors.first_name && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1", children: errors.first_name })
              ] }),
              /* @__PURE__ */ jsxs("div", { children: [
                /* @__PURE__ */ jsx(
                  "label",
                  {
                    htmlFor: "last-name",
                    className: "block text-sm font-semibold leading-6 text-gray-900",
                    children: "Last name"
                  }
                ),
                /* @__PURE__ */ jsx("div", { className: "mt-2.5", children: /* @__PURE__ */ jsx(
                  "input",
                  {
                    value: data.last_name,
                    type: "text",
                    name: "last-name",
                    id: "last-name",
                    autoComplete: "family-name",
                    onChange: (e) => setData("last_name", e.target.value),
                    className: "block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  }
                ) }),
                errors.last_name && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1", children: errors.last_name })
              ] }),
              /* @__PURE__ */ jsxs("div", { className: "sm:col-span-2", children: [
                /* @__PURE__ */ jsx(
                  "label",
                  {
                    htmlFor: "company",
                    className: "block text-sm font-semibold leading-6 text-gray-900",
                    children: "Company"
                  }
                ),
                /* @__PURE__ */ jsx("div", { className: "mt-2.5", children: /* @__PURE__ */ jsx(
                  "input",
                  {
                    value: data.company,
                    type: "text",
                    name: "company",
                    id: "company",
                    autoComplete: "organization",
                    onChange: (e) => setData("company", e.target.value),
                    className: "block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  }
                ) }),
                errors.company && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1", children: errors.company })
              ] }),
              /* @__PURE__ */ jsxs("div", { className: "sm:col-span-2", children: [
                /* @__PURE__ */ jsx(
                  "label",
                  {
                    htmlFor: "email",
                    className: "block text-sm font-semibold leading-6 text-gray-900",
                    children: "Email"
                  }
                ),
                /* @__PURE__ */ jsx("div", { className: "mt-2.5", children: /* @__PURE__ */ jsx(
                  "input",
                  {
                    value: data.email,
                    type: "email",
                    name: "email",
                    id: "email",
                    autoComplete: "email",
                    onChange: (e) => setData("email", e.target.value),
                    className: "block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  }
                ) }),
                errors.email && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1", children: errors.email })
              ] }),
              /* @__PURE__ */ jsxs("div", { className: "sm:col-span-2", children: [
                /* @__PURE__ */ jsx(
                  PhoneNumberInput,
                  {
                    state: data.number,
                    setState: (number) => setData(
                      "number",
                      number
                    )
                  }
                ),
                errors.number && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1", children: errors.number })
              ] }),
              /* @__PURE__ */ jsxs("div", { className: "sm:col-span-2", children: [
                /* @__PURE__ */ jsx(
                  "label",
                  {
                    htmlFor: "message",
                    className: "block text-sm font-semibold leading-6 text-gray-900",
                    children: "Message"
                  }
                ),
                /* @__PURE__ */ jsx("div", { className: "mt-2.5", children: /* @__PURE__ */ jsx(
                  "textarea",
                  {
                    value: data.message,
                    name: "message",
                    id: "message",
                    rows: 4,
                    className: "block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6",
                    onChange: (e) => setData("message", e.target.value)
                  }
                ) }),
                errors.message && /* @__PURE__ */ jsx("span", { className: "flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1", children: errors.message })
              ] })
            ] }),
            /* @__PURE__ */ jsx("div", { className: "mt-10", children: /* @__PURE__ */ jsx(
              "button",
              {
                type: "submit",
                className: "block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600",
                children: "Let's talk"
              }
            ) })
          ]
        }
      )
    ] }),
    /* @__PURE__ */ jsx(Footer, {})
  ] });
}
export {
  Contact as default
};
