import{r as d,W as F,a,j as e,b as A,c as N}from"./app-18ddec6e.js";import{A as E}from"./AuthenticatedLayout-b8dfdd7c.js";import U from"./Dishes-5acb2ec2.js";import{U as L}from"./UserCircleIcon-7b642f0b.js";import"./ApplicationLogo-76453d54.js";import"./transition-480ac2b9.js";import"./open-closed-84efaa44.js";function G({auth:v,categories:m,dishes:w}){var f;const[g,h]=d.useState(!1),[u,k]=d.useState(""),i=d.useRef(null),[o,p]=d.useState([]),{data:l,setData:c,reset:D,errors:r,setError:x,clearErrors:C}=F({name:"",price:"",description:"",category:(f=m.at(0))==null?void 0:f.id,image:""}),P=async t=>{if(t.preventDefault(),o.length==0){x("image","Please upload a photo");return}try{C(),h(!0);const n=(await N.post("/api/dish",l)).data.id;await j(n),D(),p([]),k("Dish added successfully")}catch(s){if(s.response.data.errors){const n=s.response.data.errors;Object.keys(n).forEach(b=>{x(b,n[b][0])})}}finally{h(!1)}},j=t=>{const s=new FormData;return s.append("id",t),i!=null&&i.current&&(i==null?void 0:i.current).files.length>0?(s.append("image",(i==null?void 0:i.current).files[0]),N.post("/api/dish/media",s)):Promise.resolve()},S=t=>{const s=t.target.files;for(let n=0;n<s.length;n++)p(y=>[...y,URL.createObjectURL(s[n])])};return a(E,{user:v.user,header:e("h2",{className:"font-semibold text-xl text-gray-800 leading-tight",children:"Add a Dish"}),children:[e(A,{title:"Orders"}),a("div",{className:"mx-auto my-6 max-w-4xl",children:[e(U,{dishes:w}),a("form",{onSubmit:P,children:[a("div",{className:"space-y-12",children:[a("div",{className:"border-b border-gray-900/10 pb-12",children:[u.length>0&&e("p",{className:"mt-1 text-md leading-6 text-green-600",children:u}),a("div",{className:"mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6",children:[a("div",{className:"sm:col-span-4",children:[e("label",{htmlFor:"username",className:"block text-sm font-medium leading-6 text-gray-900",children:"Dish Name"}),a("div",{className:"mt-2",children:[e("div",{className:"flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md",children:e("input",{value:l.name,type:"text",name:"name",id:"name",onChange:t=>c("name",t.target.value),className:"block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6",placeholder:"Mantoo"})}),r.name&&e("span",{className:"flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1",children:r.name})]})]}),a("div",{className:"sm:col-span-4",children:[e("label",{htmlFor:"price",className:"block text-sm font-medium leading-6 text-gray-900",children:"Price"}),a("div",{className:"mt-2",children:[e("div",{className:"flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md",children:e("input",{value:l.price,type:"number",name:"price",id:"price",onChange:t=>c("price",t.target.value),className:"block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6",placeholder:"24.0"})}),r.price&&e("span",{className:"flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1",children:r.price})]})]}),a("div",{className:"col-span-full",children:[e("label",{htmlFor:"description",className:"block text-sm font-medium leading-6 text-gray-900",children:"Description"}),e("div",{className:"mt-2",children:e("textarea",{value:l.description,id:"description",name:"description",rows:3,onChange:t=>c("description",t.target.value),className:"block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"})}),r.description&&e("span",{className:"flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1",children:r.description}),e("p",{className:"mt-3 text-sm leading-6 text-gray-600",children:"Write a few sentences about the dish."})]}),a("div",{className:"col-span-full",children:[e("label",{htmlFor:"photo",className:"block text-sm font-medium leading-6 text-gray-900",children:"Dish Photo"}),a("div",{className:"mt-2 flex items-center gap-x-3",children:[o.length==0&&e(L,{className:"h-12 w-12 text-gray-300","aria-hidden":"true"}),e("div",{children:o.map((t,s)=>e("img",{className:"h-10 w-10 rounded-full",src:t,alt:""},s))}),e("input",{onChange:S,accept:"image/jpg,png",multiple:!0,ref:i,type:"file",id:"photo",name:"photo",hidden:!0}),e("button",{onClick:()=>(i==null?void 0:i.current).click(),type:"button",className:"rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50",children:"Change"})]}),r.image&&e("span",{className:"flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1",children:r.image})]})]})]}),e("div",{className:"border-b border-gray-900/10 pb-12",children:e("div",{className:"mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6",children:a("div",{className:"sm:col-span-3",children:[e("label",{htmlFor:"category",className:"block text-sm font-medium leading-6 text-gray-900",children:"Category"}),e("div",{className:"mt-2",children:e("select",{value:l.category,onChange:t=>c("category",t.target.value),id:"category",name:"category",className:"block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6",children:m.map(({name:t,id:s})=>e("option",{value:s,children:t},s))})}),r.category&&e("span",{className:"flex items-center font-medium tracking-wide text-red-500 text-xs mt-2 ml-1",children:r.category})]})})})]}),a("div",{className:"mt-6 flex items-center justify-end gap-x-6",children:[e("button",{type:"button",className:"text-sm font-semibold leading-6 text-gray-900",children:"Cancel"}),e("button",{disabled:g,type:"submit",className:"rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600",children:g?"Submitting":"Save"})]})]})]})]})}export{G as default};
