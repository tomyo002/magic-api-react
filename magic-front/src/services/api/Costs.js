import {URL_COST, URL_ELEMENT} from "../url/BaseUrl.js";


export async function fetchCost(url) {
  const reponse = await fetch(`${URL_COST.itemUrl(url)}`);
  return reponse.json();
}
export async function fetchElement(url) {
  const reponse = await fetch(`${URL_ELEMENT.itemUrl(url)}`);
  return reponse.json();
}
