import{r as f,W as y,a,j as s}from"./app-18ddec6e.js";import{T as d,I as c}from"./TextInput-34e0a98c.js";import{I as p}from"./InputLabel-5652cc17.js";import{P as N}from"./PrimaryButton-bea0730e.js";import{$ as x}from"./transition-480ac2b9.js";import"./open-closed-84efaa44.js";function j({className:h=""}){const l=f.useRef(),m=f.useRef(),{data:e,setData:o,errors:t,put:v,reset:n,processing:g,recentlySuccessful:_}=y({current_password:"",password:"",password_confirmation:""});return a("section",{className:h,children:[a("header",{children:[s("h2",{className:"text-lg font-medium text-gray-900",children:"Update Password"}),s("p",{className:"mt-1 text-sm text-gray-600",children:"Ensure your account is using a long, random password to stay secure."})]}),a("form",{onSubmit:r=>{r.preventDefault(),v(route("password.update"),{preserveScroll:!0,onSuccess:()=>n(),onError:u=>{var i,w;u.password&&(n("password","password_confirmation"),(i=l.current)==null||i.focus()),u.current_password&&(n("current_password"),(w=m.current)==null||w.focus())}})},className:"mt-6 space-y-6",children:[a("div",{children:[s(p,{htmlFor:"current_password",value:"Current Password"}),s(d,{id:"current_password",ref:m,value:e.current_password,onChange:r=>o("current_password",r.target.value),type:"password",className:"mt-1 block w-full",autoComplete:"current-password"}),s(c,{message:t.current_password,className:"mt-2"})]}),a("div",{children:[s(p,{htmlFor:"password",value:"New Password"}),s(d,{id:"password",ref:l,value:e.password,onChange:r=>o("password",r.target.value),type:"password",className:"mt-1 block w-full",autoComplete:"new-password"}),s(c,{message:t.password,className:"mt-2"})]}),a("div",{children:[s(p,{htmlFor:"password_confirmation",value:"Confirm Password"}),s(d,{id:"password_confirmation",value:e.password_confirmation,onChange:r=>o("password_confirmation",r.target.value),type:"password",className:"mt-1 block w-full",autoComplete:"new-password"}),s(c,{message:t.password_confirmation,className:"mt-2"})]}),a("div",{className:"flex items-center gap-4",children:[s(N,{disabled:g,children:"Save"}),s(x,{show:_,enterFrom:"opacity-0",leaveTo:"opacity-0",className:"transition ease-in-out",children:s("p",{className:"text-sm text-gray-600",children:"Saved."})})]})]})]})}export{j as default};
