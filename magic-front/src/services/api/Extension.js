export const BASE_URL = "http://localhost:8000";

export async function fetchAllExtension() {
  const reponse = await fetch(`${BASE_URL}/api/extensions`);
  return reponse.json();
}
