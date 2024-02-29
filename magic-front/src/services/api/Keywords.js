export const BASE_URL = "http://localhost:8000";

export async function fetchAllKeyword() {
  const reponse = await fetch(`${BASE_URL}/api/keywords`);
  return reponse.json();
}
export async function fetchKeywordCard(url) {
  const reponse = await fetch(`${BASE_URL}${url}`);
  return reponse.json();
}
export async function fetchKeyword(url) {
  const reponse = await fetch(`${BASE_URL}${url}`);
  return reponse.json();
}
export async function fetchKeywordwithId(id) {
  const reponse = await fetch(`${BASE_URL}/api/keywords/${id}`);
  return reponse.json();
}
export async function fetchCard(url) {
  const reponse = await fetch(`${BASE_URL}${url}`);
  return reponse.json();
}
