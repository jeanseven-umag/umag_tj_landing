export const getStripText = (html, length) => {
  const element = document.createElement("div");
  element.innerHTML = html;
  const text = element.textContent || element.innerText;
  if (length) {
    if (text?.length >= length) {
      return `${text?.slice(0, length)}...`;
    }
  }
  return text;
};
