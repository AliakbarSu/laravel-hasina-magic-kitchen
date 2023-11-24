import { j as jsx, a as jsxs, F as Fragment } from "../ssr.js";
import { Disclosure } from "@headlessui/react";
import { ShoppingCartIcon, XMarkIcon, Bars3Icon } from "@heroicons/react/24/outline";
import { useSelector } from "react-redux";
import { Link } from "@inertiajs/react";
function classNames(...classes) {
  return classes.filter(Boolean).join(" ");
}
function Example() {
  const isCartEmpty = useSelector(
    (state) => state.cart.items.length > 0 ? true : false
  );
  return /* @__PURE__ */ jsx(Disclosure, { as: "nav", className: "bg-blue-600 shadow mb-1", children: ({ open }) => /* @__PURE__ */ jsxs(Fragment, { children: [
    /* @__PURE__ */ jsx("div", { className: "mx-auto max-w-7xl px-4 sm:px-6 lg:px-8", children: /* @__PURE__ */ jsxs("div", { className: "flex h-16 justify-between", children: [
      /* @__PURE__ */ jsx("div", { className: "flex", children: /* @__PURE__ */ jsx("div", { className: "flex flex-shrink-0 items-center", children: /* @__PURE__ */ jsx(Link, { href: route("main.home"), children: /* @__PURE__ */ jsx("h1", { className: "font-extrabold font-mono text-white text-2xl", children: "HSM" }) }) }) }),
      /* @__PURE__ */ jsxs("div", { className: "hidden sm:ml-6 sm:flex ", children: [
        /* @__PURE__ */ jsxs("div", { className: "hidden sm:mr-6 sm:flex sm:space-x-8", children: [
          /* @__PURE__ */ jsx(
            Link,
            {
              href: route("main.home"),
              className: classNames(
                "inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-md font-medium text-white hover:border-gray-300 hover:text-gray-300"
              ),
              children: "Menu"
            }
          ),
          /* @__PURE__ */ jsx(
            Link,
            {
              href: route("about"),
              className: classNames(
                "inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-md font-medium text-white hover:border-gray-300 hover:text-gray-300"
              ),
              children: "About"
            }
          ),
          /* @__PURE__ */ jsx(
            Link,
            {
              href: route("contact"),
              className: classNames(
                "inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-md font-medium text-white hover:border-gray-300 hover:text-gray-300"
              ),
              children: "Contact"
            }
          ),
          /* @__PURE__ */ jsx(
            Link,
            {
              href: route("faqs"),
              className: classNames(
                "inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-md font-medium text-white hover:border-gray-300 hover:text-gray-300"
              ),
              children: "FAQS"
            }
          )
        ] }),
        /* @__PURE__ */ jsxs(
          "button",
          {
            type: "button",
            className: "relative rounded-full p-1 text-white hover:text-gray-300",
            children: [
              isCartEmpty && /* @__PURE__ */ jsx("div", { className: "rounded-full h-3 w-3 bg-red-500 absolute top-4 -right-1 animate-bounce" }),
              /* @__PURE__ */ jsx(Link, { href: route("profile.checkout"), children: /* @__PURE__ */ jsx(
                ShoppingCartIcon,
                {
                  className: "h-6 w-6",
                  "aria-hidden": "true"
                }
              ) })
            ]
          }
        )
      ] }),
      /* @__PURE__ */ jsx("div", { className: "-mr-2 flex items-center sm:hidden", children: /* @__PURE__ */ jsxs(Disclosure.Button, { className: "inline-flex items-center justify-center rounded-md p-2 text-white  hover:bg-gray-100 hover:text-gray-500", children: [
        /* @__PURE__ */ jsx("span", { className: "sr-only", children: "Open main menu" }),
        open ? /* @__PURE__ */ jsx(
          XMarkIcon,
          {
            className: "block h-6 w-6",
            "aria-hidden": "true"
          }
        ) : /* @__PURE__ */ jsx(
          Bars3Icon,
          {
            className: "block h-6 w-6",
            "aria-hidden": "true"
          }
        )
      ] }) })
    ] }) }),
    /* @__PURE__ */ jsx(Disclosure.Panel, { className: "sm:hidden", children: /* @__PURE__ */ jsxs("div", { className: "space-y-1 pb-3 pt-2", children: [
      /* @__PURE__ */ jsx(
        Disclosure.Button,
        {
          as: Link,
          href: route("main.home"),
          className: classNames(
            "block border-l-4 py-2 pl-3 pr-4 text-base font-medium hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700",
            route().current("main.home") && "text-indigo-700 border-indigo-500 bg-indigo-50",
            !route().current("main.home") && "text-white border-transparent"
          ),
          children: "Menu"
        }
      ),
      /* @__PURE__ */ jsx(
        Disclosure.Button,
        {
          as: Link,
          href: route("about"),
          className: classNames(
            "block border-l-4 py-2 pl-3 pr-4 text-base font-medium hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700",
            route().current("about") && "text-indigo-700 border-indigo-500 bg-indigo-50",
            !route().current("about") && "text-white border-transparent"
          ),
          children: "About"
        }
      ),
      /* @__PURE__ */ jsx(
        Disclosure.Button,
        {
          as: Link,
          href: route("contact"),
          className: classNames(
            "block border-l-4 py-2 pl-3 pr-4 text-base font-medium hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700",
            route().current("contact") && "text-indigo-700 border-indigo-500 bg-indigo-50",
            !route().current("contact") && "text-white border-transparent"
          ),
          children: "Contact"
        }
      ),
      /* @__PURE__ */ jsx(
        Disclosure.Button,
        {
          as: Link,
          href: route("faqs"),
          className: classNames(
            "block border-l-4 py-2 pl-3 pr-4 text-base font-medium hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700",
            route().current("faqs") && "text-indigo-700 border-indigo-500 bg-indigo-50",
            !route().current("faqs") && "text-white border-transparent"
          ),
          children: "FAQS"
        }
      ),
      /* @__PURE__ */ jsxs(
        Disclosure.Button,
        {
          as: Link,
          href: route("profile.checkout"),
          className: classNames(
            "relative block border-l-4 py-2 pl-3 pr-4 text-base font-medium hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700",
            route().current("profile.checkout") && "text-indigo-700 border-indigo-500 bg-indigo-50",
            !route().current("profile.checkout") && "text-white border-transparent"
          ),
          children: [
            isCartEmpty && /* @__PURE__ */ jsx("div", { className: "rounded-full h-3 w-3 bg-red-500 absolute top-1 left-8 animate-bounce" }),
            /* @__PURE__ */ jsx(
              ShoppingCartIcon,
              {
                className: "h-6 w-6 hover:stroke-black",
                "aria-hidden": "true"
              }
            )
          ]
        }
      )
    ] }) })
  ] }) });
}
const navigation = [
  {
    name: "Facebook",
    href: "https://www.facebook.com",
    active: true,
    Icon: (props) => /* @__PURE__ */ jsx("svg", { fill: "currentColor", viewBox: "0 0 24 24", ...props, children: /* @__PURE__ */ jsx(
      "path",
      {
        fillRule: "evenodd",
        d: "M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z",
        clipRule: "evenodd"
      }
    ) })
  },
  {
    name: "Instagram",
    href: "https://www.instagram.com",
    active: true,
    Icon: (props) => /* @__PURE__ */ jsx("svg", { fill: "currentColor", viewBox: "0 0 24 24", ...props, children: /* @__PURE__ */ jsx(
      "path",
      {
        fillRule: "evenodd",
        d: "M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z",
        clipRule: "evenodd"
      }
    ) })
  },
  {
    name: "Twitter",
    href: "https://www.twitter.com",
    active: false,
    Icon: (props) => /* @__PURE__ */ jsx("svg", { fill: "currentColor", viewBox: "0 0 24 24", ...props, children: /* @__PURE__ */ jsx("path", { d: "M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" }) })
  },
  {
    name: "YouTube",
    href: "#",
    active: false,
    Icon: (props) => /* @__PURE__ */ jsx("svg", { fill: "currentColor", viewBox: "0 0 24 24", ...props, children: /* @__PURE__ */ jsx(
      "path",
      {
        fillRule: "evenodd",
        d: "M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z",
        clipRule: "evenodd"
      }
    ) })
  }
];
function Footer() {
  return /* @__PURE__ */ jsx("footer", { className: "bg-white", children: /* @__PURE__ */ jsxs("div", { className: "mx-auto max-w-6xl px-6 py-16 md:flex md:items-center md:justify-between lg:px-8", children: [
    /* @__PURE__ */ jsx("div", { className: "flex justify-center space-x-6 md:order-2", children: navigation.map(
      (item) => item.active && /* @__PURE__ */ jsxs(
        "a",
        {
          href: item.href,
          className: "text-gray-400 hover:text-gray-500",
          children: [
            /* @__PURE__ */ jsx("span", { className: "sr-only", children: item.name }),
            /* @__PURE__ */ jsx(
              item.Icon,
              {
                className: "h-6 w-6",
                "aria-hidden": "true"
              }
            )
          ]
        },
        item.name
      )
    ) }),
    /* @__PURE__ */ jsx("div", { className: "mt-8 md:order-1 md:mt-0", children: /* @__PURE__ */ jsxs("p", { className: "text-center text-xs leading-5 text-gray-500", children: [
      "© ",
      (/* @__PURE__ */ new Date()).getFullYear(),
      " Hasina's Magic Kitchen LTD. All rights reserved."
    ] }) })
  ] }) });
}
export {
  Example as E,
  Footer as F,
  classNames as c
};
