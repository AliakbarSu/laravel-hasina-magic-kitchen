import { a as jsxs, j as jsx } from "../ssr.js";
function PhoneNumberInput(props) {
  return /* @__PURE__ */ jsxs("div", { children: [
    /* @__PURE__ */ jsx(
      "label",
      {
        htmlFor: "mobile-number",
        className: "block text-sm font-medium text-gray-700",
        children: "Mobile Number"
      }
    ),
    /* @__PURE__ */ jsxs("div", { className: "relative mt-1 rounded-md shadow-sm", children: [
      /* @__PURE__ */ jsxs("div", { className: "absolute inset-y-0 left-0 flex items-center", children: [
        /* @__PURE__ */ jsx("label", { htmlFor: "country", className: "sr-only", children: "Country" }),
        /* @__PURE__ */ jsx(
          "select",
          {
            id: "country",
            name: "country",
            autoComplete: "country",
            className: "h-full rounded-md border-transparent bg-transparent py-0 pl-3 pr-7 text-gray-500 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm",
            children: /* @__PURE__ */ jsx("option", { children: "+64" })
          }
        )
      ] }),
      /* @__PURE__ */ jsx(
        "input",
        {
          value: props.state,
          onChange: (e) => props.setState(e.target.value),
          type: "number",
          name: "mobile-number",
          id: "mobile-number",
          className: "block w-full rounded-md border-gray-300 pl-16 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm",
          placeholder: "(555) 987-6543"
        }
      )
    ] })
  ] });
}
export {
  PhoneNumberInput as P
};
