import { clsx } from "clsx";
import { twMerge } from "tailwind-merge";

export function cn(...inputs) {
    return twMerge(clsx(inputs));
}

export const getInitials = (name) => {
    const parts = name.trim().split(" ");
    return parts.length > 1 ? parts[0][0] + parts[1][0] : name.slice(0, 2);
};

export const getCategoryColor = (category) => {
    const colors = [
        "bg-blue-100 text-blue-700",
        "bg-purple-100 text-purple-700",
        "bg-pink-100 text-pink-700",
        "bg-indigo-100 text-indigo-700",
        "bg-cyan-100 text-cyan-700",
        "bg-teal-100 text-teal-700",
        "bg-emerald-100 text-emerald-700",
        "bg-orange-100 text-orange-700",
        "bg-amber-100 text-amber-700",
        "bg-lime-100 text-lime-700",
        "bg-violet-100 text-violet-700",
        "bg-fuchsia-100 text-fuchsia-700",
    ];

    const index =
        category.split("").reduce((acc, char) => acc + char.charCodeAt(0), 0) %
        colors.length;

    return colors[index];
};
