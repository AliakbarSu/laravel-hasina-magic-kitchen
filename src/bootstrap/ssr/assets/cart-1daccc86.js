import { createSlice } from "@reduxjs/toolkit";
const LOCALSTORAGE_KEY = "CUSTOMER_CART";
const clearCart$1 = () => {
  localStorage.removeItem(LOCALSTORAGE_KEY);
};
const initialState = {
  items: [],
  addons: [],
  loaded: false
};
const cartSlice = createSlice({
  name: "cart",
  initialState,
  reducers: {
    setCart: (state, action) => {
      state.addons = action.payload.addons;
      state.items = action.payload.items;
      state.loaded = true;
    },
    addItem: (state, action) => {
      state.loaded = true;
      const itemExist = state.items.find(
        (item) => item.id === action.payload.id
      );
      if (!itemExist)
        state.items = [...state.items, action.payload];
    },
    addOrUpdate: (state, action) => {
      const addonExist = state.addons.find(
        (addon) => addon.id === action.payload.id
      );
      if (!addonExist) {
        state.addons = [...state.addons, action.payload];
      } else {
        addonExist.quantity = action.payload.quantity > 0 ? action.payload.quantity : 0;
        state.addons = state.addons.map((addon) => {
          if (addon.id === action.payload.id) {
            return addonExist;
          }
          return addon;
        });
      }
    },
    removeAddon: (state, action) => {
      state.addons = state.addons.filter(
        (addon) => addon.id !== action.payload
      );
    },
    removeItem: (state, action) => {
      state.items = state.items.filter(
        (item) => item.id !== action.payload
      );
    },
    increaseNumOfPeople: (state, action) => {
      state.items = state.items.map((item) => {
        if (item.id === action.payload.id) {
          return { ...item, numberOfPeople: item.numOfPeople + 1 };
        }
        return item;
      });
    },
    decreaseNumOfPeople: () => {
    },
    updateQuantity: (state, {
      payload: { quantity, id }
    }) => {
      state.items = state.items.map((item) => {
        if (item.id === id) {
          return {
            ...item,
            numOfPeople: quantity
          };
        }
        return item;
      });
    },
    updateMenuItem: (state, action) => {
      state.items = state.items.map((item) => {
        if (item.id === action.payload.id) {
          return { ...item, ...action.payload };
        }
        return item;
      });
    },
    customizeItem: () => {
    },
    getItemQuantity: (state, action) => {
      state.items = state.items.filter((item) => {
        if (item.id === action.payload) {
          return item.numOfPeople;
        }
      });
    },
    clearCart: (state) => {
      clearCart$1();
      state.items = [];
      state.addons = [];
    }
  }
});
const {
  setCart,
  addItem,
  removeItem,
  getItemQuantity,
  updateQuantity,
  updateMenuItem,
  addOrUpdate,
  removeAddon,
  clearCart
} = cartSlice.actions;
const selectCartTotal = (state) => {
  const addonsTotal = state.cart.addons.reduce(
    (total, addon) => total + addon.price * addon.quantity,
    0
  );
  const itemsTotal = state.cart.items.reduce(
    (total, item) => total + item.price * item.numOfPeople,
    0
  );
  return addonsTotal + itemsTotal;
};
cartSlice.reducer;
export {
  removeAddon as a,
  addOrUpdate as b,
  clearCart as c,
  updateQuantity as d,
  addItem as e,
  removeItem as r,
  selectCartTotal as s,
  updateMenuItem as u
};
