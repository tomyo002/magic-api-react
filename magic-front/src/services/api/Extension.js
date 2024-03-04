import { URL_EXTENSION } from "../url/BaseUrl";

export async function fetchAllExtension() {
  const reponse = await fetch(`${URL_EXTENSION.list}`);
  return reponse.json();
}
export async function fetchExtensionId(id) {
  const reponse = await fetch(`${URL_EXTENSION.itemId(id)}`);
  return reponse.json();
}

export async function fetchExtensionUrl(url) {
  const reponse = await fetch(`${URL_EXTENSION.itemUrl(url)}`);
  return reponse.json();
}
