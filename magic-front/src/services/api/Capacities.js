import {URL_CAPACITY} from "../url/BaseUrl.js";

export async function fetchCapacity(url) {
  const reponse = await fetch(`${URL_CAPACITY.itemUrl(url)}`);
  return reponse.json();
}
