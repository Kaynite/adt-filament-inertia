type TeamMember = {
    id: number;
    name: string;
    position: string;
    team_group_id: number;
    created_at: string /* Date */ | null;
    updated_at: string /* Date */ | null;
    team_group?: TeamGroup | null;
    image?: string | null;
}
