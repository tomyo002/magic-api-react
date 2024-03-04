import { URL_CAPACITY } from "../url/BaseUrl";

export async function fetchCapacityUrl(url) {
  const reponse = await fetch(`${URL_CAPACITY.itemUrl(url)}`);
  return reponse.json();
}
