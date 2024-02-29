export const BASE_URL = "http://localhost:8000";

export async function fetchAllExtension() {
  const reponse = await fetch(`${BASE_URL}/api/extensions`);
  return reponse.json();
}
export async function fetchExtension(id) {
  const reponse = await fetch(`${BASE_URL}/api/extensions/${id}`);
  return reponse.json();
}

export async function fetchCard(url) {
  const reponse = await fetch(`${BASE_URL}${url}`);
  return reponse.json();
}