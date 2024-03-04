import {URL_CARD, URL_COST, URL_ELEMENT} from "../url/BaseUrl.js";


export async function fetchAllElement() {
  const reponse = await fetch(`${URL_ELEMENT.list}`);
  return reponse.json();
}
export async function fetchElement(id) {
  const reponse = await fetch(`${URL_ELEMENT.itemId(id)}`);
  return reponse.json();
}
export async function fetchCostUrl(url) {
  const reponse = await fetch(`${URL_COST.itemUrl(url)}`);
  return reponse.json();
}

export async function fetchCardUrl(url) {
  const reponse = await fetch(`${URL_CARD.itemUrl(url)}`);
  return reponse.json();
}
