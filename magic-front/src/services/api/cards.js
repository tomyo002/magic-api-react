import { URL_CARD } from "../url/BaseUrl";

export async function fetchAllCards() {
  const reponse = await fetch(`${URL_CARD.list}`);
  return reponse.json();
}
export async function fetchCardId(id) {
  const reponse = await fetch(`${URL_CARD.itemId(id)}`);
  return reponse.json();
}
export async function fetchCardUrl(url) {
  const reponse = await fetch(`${URL_CARD.itemUrl(url)}`);
  return reponse.json();
}

