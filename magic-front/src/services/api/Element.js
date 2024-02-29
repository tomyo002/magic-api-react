export const BASE_URL = "http://localhost:8000";

export async function fetchAllElement() {
  const reponse = await fetch(`${BASE_URL}/api/elements`);
  return reponse.json();
}
export async function fetchElement(id) {
  const reponse = await fetch(`${BASE_URL}/api/elements/${id}`);
  return reponse.json();
}
export async function fetchCostUrl(url) {
  const reponse = await fetch(`${BASE_URL}${url}`);
  return reponse.json();
}

export async function fetchCardUrl(url) {
  const reponse = await fetch(`${BASE_URL}${url}`);
  return reponse.json();
}
