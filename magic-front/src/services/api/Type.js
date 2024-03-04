import { URL_TYPE } from "../url/BaseUrl";

export async function fetchTypeUrl(url) {
  const reponse = await fetch(`${URL_TYPE.itemUrl(url)}`);
  return reponse.json();
}
