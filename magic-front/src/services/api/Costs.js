import { URL_COST } from "../url/BaseUrl";

export async function fetchCostUrl(url) {
  const reponse = await fetch(`${URL_COST.itemUrl(url)}`);
  return reponse.json();
}
