import { URL_ELEMENT } from "../url/BaseUrl";

export async function fetchAllElement() {
  const reponse = await fetch(`${URL_ELEMENT.list}`);
  return reponse.json();
}
export async function fetchElementId(id) {
  const reponse = await fetch(`${URL_ELEMENT.itemId(id)}`);
  return reponse.json();
}

export async function fetchElementUrl(url) {
  const reponse = await fetch(`${URL_ELEMENT.itemUrl(url)}`);
  return reponse.json();
}
