function formatNZD(totalPrice) {
  const formattedPrice = totalPrice.toLocaleString("en-NZ", {
    style: "currency",
    currency: "NZD",
    minimumFractionDigits: 2
  });
  return formattedPrice;
}
export {
  formatNZD as f
};
