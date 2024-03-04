import { URL_KEYWORD } from "../url/BaseUrl";

export async function fetchAllKeyword() {
  const reponse = await fetch(`${URL_KEYWORD.list}`);
  return reponse.json();
}
export async function fetchKeywordCardUrl(url) {
  const reponse = await fetch(`${URL_KEYWORD.itemUrlCard(url)}`);
  return reponse.json();
}
export async function fetchKeywordUrl(url) {
  const reponse = await fetch(`${URL_KEYWORD.itemUrl(url)}`);
  return reponse.json();
}
export async function fetchKeywordId(id) {
  const reponse = await fetch(`${URL_KEYWORD.itemId(id)}`);
  return reponse.json();
}
