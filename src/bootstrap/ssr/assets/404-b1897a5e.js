import { j as jsx, F as Fragment, a as jsxs } from "../ssr.js";
import { Link } from "@inertiajs/react";
import "react/jsx-runtime";
import "react-dom/server";
import "@inertiajs/react/server";
function PageNotFound() {
  return /* @__PURE__ */ jsx(Fragment, { children: /* @__PURE__ */ jsxs("main", { className: "h-full", children: [
    /* @__PURE__ */ jsx(
      "img",
      {
        src: "https://images.unsplash.com/photo-1545972154-9bb223aac798?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=3050&q=80&exp=8&con=-15&sat=-75",
        alt: "",
        className: "absolute inset-0 -z-10 h-full w-full object-cover object-top"
      }
    ),
    /* @__PURE__ */ jsxs("div", { className: "mx-auto max-w-7xl px-6 py-32 text-center sm:py-40 lg:px-8", children: [
      /* @__PURE__ */ jsx("p", { className: "text-base font-semibold leading-8 text-white", children: "404" }),
      /* @__PURE__ */ jsx("h1", { className: "mt-4 text-3xl font-bold tracking-tight text-white sm:text-5xl", children: "Page not found" }),
      /* @__PURE__ */ jsx("p", { className: "mt-4 text-base text-white/70 sm:mt-6", children: "Sorry, we couldn’t find the page you’re looking for." }),
      /* @__PURE__ */ jsx("div", { className: "mt-10 flex justify-center", children: /* @__PURE__ */ jsxs(
        Link,
        {
          href: route("main.home"),
          className: "text-sm font-semibold leading-7 text-white",
          children: [
            /* @__PURE__ */ jsx("span", { "aria-hidden": "true", children: "←" }),
            " Back to home"
          ]
        }
      ) })
    ] })
  ] }) });
}
export {
  PageNotFound as default
};
