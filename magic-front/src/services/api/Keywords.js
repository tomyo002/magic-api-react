import { URL_CARD, URL_KEYWORD } from "../url/BaseUrl.js";

export async function fetchAllKeyword() {
  const reponse = await fetch(`${URL_KEYWORD.list}`);
  return reponse.json();
}
export async function fetchKeywordCard(url) {
  const reponse = await fetch(`${URL_KEYWORD.itemUrlCard(url)}`);
  return reponse.json();
}
export async function fetchKeyword(url) {
  const reponse = await fetch(`${URL_KEYWORD.itemUrl(url)}`);
  return reponse.json();
}
export async function fetchKeywordwithId(id) {
  const reponse = await fetch(`${URL_KEYWORD.itemId(id)}`);
  return reponse.json();
}
export async function fetchCard(url) {
  const reponse = await fetch(`${URL_CARD.itemUrl(url)}`);
  return reponse.json();
}
