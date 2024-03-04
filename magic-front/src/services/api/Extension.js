import {URL_CARD, URL_EXTENSION} from "../url/BaseUrl.js";


export async function fetchAllExtension() {
  const reponse = await fetch(`${URL_EXTENSION.list}`);
  return reponse.json();
}
export async function fetchExtension(id) {
  const reponse = await fetch(`${URL_EXTENSION.itemId(id)}`);
  return reponse.json();
}

export async function fetchCard(url) {
  const reponse = await fetch(`${URL_CARD.itemUrl(url)}`);
  return reponse.json();
}