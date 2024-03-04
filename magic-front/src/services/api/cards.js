import {BASE_URL, URL_CARD, URL_EXTENSION, URL_TYPE} from "../url/BaseUrl.js";

export async function fetchAllCards() {
  const reponse = await fetch(`${URL_CARD.list}`);
  return reponse.json();
}
export async function fetchCard(id) {
  const reponse = await fetch(`${URL_CARD.itemId(id)}`);
  return reponse.json();
}
export async function fetchType(url) {
  const reponse = await fetch(`${URL_TYPE.itemUrl(url)}`);
  return reponse.json();
}
export async function fetchExtension(url) {
  const reponse = await fetch(`${URL_EXTENSION.itemUrl(url)}`);
  return reponse.json();
}
